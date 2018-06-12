<?php

namespace App\Http\Controllers;

use App\Model\LegalCompany;
use App\Model\SfProject;
use App\Model\SfStage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
                        ->select('sf_project.sf_name', 'legal_company.lc_account_id', 'legal_province.province_desc','sf_stage.sf_opstage_startdate')
                        ->orderBy('sf_project.sf_project_id', 'desc')
                        ->get();

        return view('lead.list_project', compact('project'));
    }

    public function kanban()
    {
        $project = DB::table('sf_project')
                        ->leftjoin('legal_company', 'legal_company.lc_id', '=', 'sf_project.lc_id')
                        ->leftjoin('legal_office', 'legal_office.lc_id', '=', 'legal_company.lc_id')
                        ->leftjoin('legal_province', 'legal_province.province_id', '=', 'legal_office.office_province')
                        ->leftjoin('sf_stage', 'sf_stage.sf_project_id', '=', 'sf_project.sf_project_id')
                        ->select('legal_company.lc_id', 'sf_project.sf_project_id', 'sf_project.sf_name', 'legal_company.lc_account_id')
                        ->get();
        $grouped = $project->groupBy('lc_account_id');
        $grouped->toArray();

        return view('lead.kanban_view', compact('grouped'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lc_name =  DB::table('legal_company')->pluck('lc_account_id','lc_id')->toArray(); 
        $office_name =  DB::table('legal_office')->pluck('office_name')->toArray();

        return view('lead.form_create', compact('lc_name','office_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sf_project = SfProject::create($request->all() + ['mpp_code'=> 'MPP_A1_SBS_02']);
        $sf_stage = [
            'sf_project_id' => $sf_project->sf_project_id,
            'sf_opstage_ref_id' => '1',
            'sf_opstage_startdate' => $request->sf_opstage_startdate,
            'sf_opstage_enddate' => $request->sf_opstage_enddate
        ];
        SfStage::create($sf_stage);

        return redirect('/lead');

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