<?php

namespace App\Http\Controllers;

use App\Model\LegalCompany;
use App\Model\SfProject;
use App\Model\SfStage;
use App\Model\SfBudgetinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeadController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing and kanban of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = DB::table('sf_project')
                        ->leftjoin('legal_company', 'legal_company.lc_id', '=', 'sf_project.lc_id')
                        ->leftjoin('legal_office', 'legal_office.lc_id', '=', 'legal_company.lc_id')
                        ->leftjoin('legal_province', 'legal_province.province_id', '=', 'legal_office.office_province')
                        ->leftjoin('sf_stage', 'sf_stage.sf_project_id', '=', 'sf_project.sf_project_id')
                        ->leftjoin('sf_stage_reference', 'sf_stage_reference.sf_opstage_ref_id', '=', 'sf_stage.sf_opstage_ref_id')
                        ->select('sf_project.sf_name', 'legal_company.lc_account_id', 'legal_province.province_desc','sf_stage.sf_opstage_startdate','legal_company.lc_telp','sf_project.sf_pic_name_temp','sf_stage_reference.sf_opstage_ref_name')
                        ->orderBy('sf_project.sf_project_id', 'desc')
                        ->get();

        return view('lead.list_project', compact('project'));
    }

    public function kanban()
    {
        // Kanban Lead
        $project_lead_select = DB::table('sf_project')
                        ->leftjoin('legal_company', 'legal_company.lc_id', '=', 'sf_project.lc_id')
                        ->leftjoin('legal_office', 'legal_office.lc_id', '=', 'legal_company.lc_id')
                        ->leftjoin('legal_province', 'legal_province.province_id', '=', 'legal_office.office_province')
                        ->leftjoin('sf_stage', 'sf_stage.sf_project_id', '=', 'sf_project.sf_project_id')
                        ->leftjoin('sf_stage_reference', 'sf_stage_reference.sf_opstage_ref_id', '=', 'sf_stage.sf_opstage_ref_id')
                        ->leftjoin('sf_budget_info', 'sf_budget_info.sf_opstage_id', '=', 'sf_stage.sf_opstage_id')
                        ->select('legal_company.lc_id','sf_project.sf_project_id','sf_project.sf_name','legal_company.lc_account_id','sf_budget_info.sf_budget_allocation')
                        ->orderBy('sf_stage.sf_opstage_startdate', 'desc')
                        ->where('sf_stage_reference.sf_opstage_ref_id', '=', '1')
                        ->get();
        $project_lead = $project_lead_select->groupBy('lc_account_id');
        $project_lead->toArray();

        // data to view
        $data['project_lead_count']= count($project_lead_select);
        $data['project_lead_sum']= $project_lead_select->sum('sf_budget_allocation');
        $data['project_lead'] = $project_lead;

        return $project_lead;

        return view('lead.kanban_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lc_name =  DB::table('legal_company')
                         ->pluck('lc_account_id','lc_id')
                         ->toArray(); 
        $office_name =  DB::table('legal_office')
                         ->pluck('office_name','office_id')
                         ->toArray();
        $stage_reference =  DB::table('sf_stage_reference')
                         ->pluck('sf_opstage_ref_name','sf_opstage_ref_id')
                         ->toArray();

        return view('lead.form_create', compact('lc_name','office_name','stage_reference'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sf_project = SfProject::create($request->all() + ['mpp_code'=>'1']);
        $sf_stage   = SfStage::create($request->all() + [
                                'sf_opstage_enddate' => date('0000-00-00'), 
                                'sf_project_id' => $sf_project->sf_project_id]);
        SfBudgetinfo::create($request->all() + [
                                'sf_project_id' => $sf_project->sf_project_id,
                                'sf_opstage_id' => $sf_stage->sf_opstage_id]);

        return redirect('/lead');

    }

    public function save_stage($id){
        SfStage::create([ 'sf_project_id' => $id,
                            'sf_opstage_ref_id' => $_GET['ref-id'],
                            'sf_opstage_startdate' => date("Y-m-d H:i:s"),
                        ]);
        return 'Sukses';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
