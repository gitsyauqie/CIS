<?php

namespace App\Http\Controllers;

use App\Model\LegalCompany;
use App\Model\SfProject;
use App\Model\SfStage;
use App\Model\SfBudgetinfo;
use App\Model\SfSoloffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Calendar;

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
        //return $project;

        return view('lead.list_project', compact('project'));
    }

    public function get_kanban($stage) {
        $project_lead_select = DB::table('sf_project')
                        ->leftjoin('legal_company', 'legal_company.lc_id', '=', 'sf_project.lc_id')
                        ->leftjoin('legal_office', 'legal_office.lc_id', '=', 'legal_company.lc_id')
                        ->leftjoin('legal_province', 'legal_province.province_id', '=', 'legal_office.office_province')
                        ->leftjoin('sf_stage', 'sf_stage.sf_project_id', '=', 'sf_project.sf_project_id')
                        ->leftjoin('sf_stage_reference', 'sf_stage_reference.sf_opstage_ref_id', '=', 'sf_stage.sf_opstage_ref_id')
                        ->leftjoin('sf_budget_info', 'sf_budget_info.sf_opstage_id', '=', 'sf_stage.sf_opstage_id')
                        ->select('legal_company.lc_id','sf_project.sf_project_id','sf_project.sf_name','legal_company.lc_account_id','sf_budget_info.sf_budget_allocation', 'sf_stage.sf_opstage_id')
                        ->orderBy('sf_stage.sf_opstage_startdate', 'desc')
                        ->where('sf_stage_reference.sf_opstage_ref_id', '=', $stage)
                        ->get();
        return $project_lead_select;
    }

    public function kanban()
    {
        // Kanban Lead
        $project_lead_select_1 = $this->get_kanban(1);
        $project_lead_1 = $project_lead_select_1->groupBy('lc_account_id');
        $project_lead_1->toArray();
        
        // data to view
        $data['project_lead_count_1']= count($project_lead_select_1);
        $data['project_lead_sum_1']= $project_lead_select_1->sum('sf_budget_allocation');
        $data['project_lead_1'] = $project_lead_1;

        // Kanban Business Requirement
        $project_lead_select_2 = $this->get_kanban(2);
        $project_lead_2 = $project_lead_select_2->groupBy('lc_account_id');
        $project_lead_2->toArray();

        // data to view
        $data['project_lead_count_2']= count($project_lead_select_2);
        $data['project_lead_sum_2']= $project_lead_select_2->sum('sf_budget_allocation');
        $data['project_lead_2'] = $project_lead_2;

        // Kanban Solution Delivery
        $project_lead_select_3 = $this->get_kanban(3);
        $project_lead_3 = $project_lead_select_3->groupBy('lc_account_id');
        $project_lead_3->toArray();

        // data to view
        $data['project_lead_count_3']= count($project_lead_select_3);
        $data['project_lead_sum_3']= $project_lead_select_3->sum('sf_budget_allocation');
        $data['project_lead_3'] = $project_lead_3;

        // Kanban Negotiation
        $project_lead_select_4 = $this->get_kanban(4);
        $project_lead_4 = $project_lead_select_4->groupBy('lc_account_id');
        $project_lead_4->toArray();

        // data to view
        $data['project_lead_count_4']= count($project_lead_select_4);
        $data['project_lead_sum_4']= $project_lead_select_4->sum('sf_budget_allocation');
        $data['project_lead_4'] = $project_lead_4;

        //return $project_lead;

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



    /*--------------------SF Requirement Section--------------------*/
    public function add_edit_requirement($sf_project_id, $sf_opstage_id)
    {
        
        $row = DB::table('sf_requirement')
                            ->where('sf_project_id', $sf_project_id)
                            ->where('sf_opstage_id', $sf_opstage_id)
                            ->first();
        //print_r($row); die();
        if ($row) {
            $data['sf_project_id'] = $sf_project_id;
            $data['sf_opstage_id'] = $sf_opstage_id;
            $data['row']           = $row;

            return view('lead.requirement_edit_form', $data);
        }
        else {
            $data['sf_project_id'] = $sf_project_id;
            $data['sf_opstage_id'] = $sf_opstage_id;

            return view('lead.requirement_add_form', $data);
        }
    }

    public function store_requirement(Request $request) 
    {
        
        $data = array('sf_project_id'        => $request->sf_project_id,
                      'sf_opstage_id'        => $request->sf_opstage_id,
                      'sf_req_desc'          => $request->sf_req_desc);
        
        $insert = DB::table('sf_requirement')->insert($data);

        if ($insert) {
            return redirect()->back()->with('success', 'Process entri successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process entri error!');
        }
    }

    public function update_requirement(Request $request) 
    {
        
        $data = array('sf_req_desc' => $request->sf_req_desc);
        
        $update = DB::table('sf_requirement')
                        ->where('sf_req_id' , $request->sf_req_id)
                        ->update($data);

        if ($update) {
            return redirect()->back()->with('success', 'Process entri successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process entri error!');
        }
    }

    /*--------------------SF Soloffers Section--------------------*/
    public function add_edit_soloffer($sf_project_id, $sf_opstage_id) 
    {
        
        $row = DB::table('sf_soloffers')
                            ->select('sf_soloff_serialid',
                                     'sf_soloff_type',
                                     'sf_soloff_name',
                                     'sf_soloff_unit_price',
                                     'sf_soloff_qty',
                                     'created_at')
                            ->where('sf_project_id', $sf_project_id)
                            ->where('sf_opstage_id', $sf_opstage_id)
                            ->get();
        $data['sf_project_id'] = $sf_project_id;
        $data['sf_opstage_id'] = $sf_opstage_id;
        $data['sf_soloffers']  = $row;

        return view('lead.soloffers_add_form', $data);
        
    }

    public function store_soloffer(Request $request) 
    {
        
        $data = array('sf_project_id'        => $request->sf_project_id,
                      'sf_opstage_id'        => $request->sf_opstage_id,
                      'sf_soloff_serialid'   => $request->sf_soloff_serialid,
                      'sf_soloff_type'       => $request->sf_soloff_type,
                      'sf_soloff_name'       => $request->sf_soloff_name,
                      'sf_soloff_unit_price' => $request->sf_soloff_unit_price,
                      'sf_soloff_qty'        => $request->sf_soloff_qty);
        //print_r($data); die();
        $insert = DB::table('sf_soloffers')->insert($data);

        if ($insert) {
            return redirect()->back()->with('success', 'Process entri successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process entri error!');
        }
    }

    public function update_soloffer(Request $request) {
        $data = array('sf_soloff_serialid'   => $request->sf_soloff_serialid,
                      'sf_soloff_type'       => $request->sf_soloff_type,
                      'sf_soloff_name'       => $request->sf_soloff_name,
                      'sf_soloff_unit_price' => $request->sf_soloff_unit_price,
                      'sf_soloff_qty'        => $request->sf_soloff_qty);
        
        $update = DB::table('sf_soloffers')
                        ->where('sf_soloff_packet_id' , $request->sf_soloff_packet_id)
                        ->update($data);

        if ($update) {
            return redirect()->back()->with('success', 'Process update successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process update error!');
        }
    }
    
    /*----------------------SF Action Item Section----------------------*/
    public function stage($sf_opstage_ref_id) 
    {
        if ($sf_opstage_ref_id == 1) {
            return 'Lead';
        }
        else if ($sf_opstage_ref_id == 2) {
            return 'Opportunity';
        }
        else if ($sf_opstage_ref_id == 3) {
            return 'Solution Delivery';
        }
        else if ($sf_opstage_ref_id == 4) {
            return 'Negotiation';
        }
        else {
            return 'Not Stage';
        }
    }

    public function add_edit_action_item($sf_opstage_id) 
    {

        $row = DB::table('sf_act_item')
                            ->leftjoin('sf_stage', 'sf_stage.sf_opstage_id', '=', 'sf_act_item.sf_opstage_id')
                            ->select('sf_act_item.sf_opstage_id',
                                     'sf_act_item.sf_act_name',
                                     'sf_act_item.sf_act_type',
                                     'sf_act_item.sf_act_description',
                                     'sf_act_item.sf_act_assigned',
                                     'sf_act_item.sf_act_latest_status',
                                     'sf_act_item.sf_act_latest_update',
                                     'sf_act_item.sf_act_status',
                                     'sf_stage.sf_opstage_ref_id')
                            ->where('sf_act_item.sf_opstage_id', $sf_opstage_id)
                            ->get();
        $data['sf_opstage_id'] = $sf_opstage_id;
        $data['sf_act_item']   = $row;
        return view('lead.act_add_form', $data);
    }

    public function store_action_item(Request $request) 
    {
        
        $data = array('sf_opstage_id'           => $request->sf_opstage_id,
                      'sf_act_name'             => $request->sf_act_name,
                      'sf_act_type'             => $request->sf_act_type,
                      'sf_act_description'      => $request->sf_act_description,
                      'sf_act_assigned'         => $request->sf_act_assigned,
                      'sf_act_latest_status'    => $request->sf_act_latest_status,
                      'sf_act_latest_update'    => $request->sf_act_latest_update.' '.$request->time,
                      'sf_act_status'           => $request->sf_act_status,
                      'sf_act_latest_status'    => $request->sf_act_latest_status);
       
        $insert = DB::table('sf_act_item')->insert($data);

        if ($insert) {
            return redirect()->back()->with('success', 'Process entri successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process entri error!');
        }
    }

    public function update_action_item(Request $request) 
    {
        
        $data = array('sf_act_name'             => $request->sf_act_name,
                      'sf_act_type'             => $request->sf_act_type,
                      'sf_act_description'      => $request->sf_act_description,
                      'sf_act_assigned'         => $request->sf_act_assigned,
                      'sf_act_latest_status'    => $request->sf_act_latest_status,
                      'sf_act_latest_update'    => $request->sf_act_latest_update.' '.$request->time,
                      'sf_act_status'           => $request->sf_act_status,
                      'sf_act_latest_status'    => $request->sf_act_latest_status);
        
        $update = DB::table('sf_act_item')
                        ->where('sf_act_id' , $request->sf_act_id)
                        ->update($data);

        if ($update) {
            return redirect()->back()->with('success', 'Process update successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process update error!');
        }
    }

     /*--------------------SF Document Section--------------------*/
    public function add_edit_document($sf_opstage_id) 
    {
        $row = DB::table('sf_documents')
                            ->select('sf_doc_name',
                                     'sf_doc_attachment',
                                     'sf_doc_type',
                                     'sf_doc_upload_by',
                                     'sf_doc_upload_date')
                            ->where('sf_opstage_id', $sf_opstage_id)
                            ->get();

        $data['sf_opstage_id'] = $sf_opstage_id;
        $data['sf_documents']  = $row;
        
        return view('lead.document_add_form', $data);
        
    }

    public function store_document(Request $request) 
    {
        $path      = $request->file('sf_doc_attachment')->store('file');
        $file_name = explode("/", $path)[1];
        $file_type = explode(".", $path)[1];

        $data = array('sf_opstage_id'           => $request->sf_opstage_id,
                      'sf_doc_name'             => $request->sf_doc_name,
                      'sf_doc_type'             => $file_type,
                      'sf_doc_attachment'       => $file_name,
                      'sf_doc_upload_by'        => $request->sf_doc_upload_by,
                      'sf_doc_upload_date'      => $request->sf_doc_upload_date.' '.$request->time);
        
        $insert = DB::table('sf_documents')->insert($data);

        if ($insert) {
            return redirect()->back()->with('success', 'Process entri successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process entri error!');
        }
    }

    public function update_document(Request $request) 
    {
        
        $path      = $request->file('sf_doc_attachment')->store('file');
        $file_name = explode("/", $path)[1];
    
        $data = array('sf_doc_name'             => $request->sf_doc_name,
                      'sf_doc_type'             => $request->sf_doc_type,
                      'sf_doc_attachment'       => $file_name,
                      'sf_doc_upload_by'        => $request->sf_doc_upload_by,
                      'sf_doc_upload_date'      => $request->sf_doc_upload_date.' '.$request->time);
        
        $update = DB::table('sf_documents')
                        ->where('sf_doc_id' , $request->sf_doc_id)
                        ->update($data);

        if ($update) {
            return redirect()->back()->with('success', 'Process update successed!');
        }
        else {
            return redirect()->back()->with('danger', 'Process update error!');
        }
    }

     /*--------------------Budget Section--------------------*/
    // public function add_edit_budget_info($sf_opstage_id) 
    // {
    //     $row = DB::table('sf_budget_info')
    //                         ->where('sf_opstage_id', $sf_opstage_id)
    //                         ->get();

    //     $data['sf_opstage_id'] = $sf_opstage_id;
    //     $data['sf_budget_info']  = $row;
        
    //     return view('lead.budget_add_form', $data);
        
    // }

    // public function store_budget_info(Request $request) 
    // {

    //     $data = array('sf_opstage_id'           => $request->sf_opstage_id,
    //                   'sf_doc_name'             => $request->sf_doc_name,
    //                   'sf_doc_type'             => $file_type,
    //                   'sf_doc_attachment'       => $file_name,
    //                   'sf_doc_upload_by'        => $request->sf_doc_upload_by,
    //                   'sf_doc_upload_date'      => $request->sf_doc_upload_date.' '.$request->time);
        
    //     $insert = DB::table('sf_budget_info')->insert($data);

    //     if ($insert) {
    //         return redirect()->back()->with('success', 'Process entri successed!');
    //     }
    //     else {
    //         return redirect()->back()->with('danger', 'Process entri error!');
    //     }
    // }

    // public function update_budget_info(Request $request) 
    // {
        
    
    //     $data = array('sf_doc_name'             => $request->sf_doc_name,
    //                   'sf_doc_type'             => $request->sf_doc_type,
    //                   'sf_doc_attachment'       => $file_name,
    //                   'sf_doc_upload_by'        => $request->sf_doc_upload_by,
    //                   'sf_doc_upload_date'      => $request->sf_doc_upload_date.' '.$request->time);
        
    //     $update = DB::table('sf_budget_info')
    //                     ->where('sf_doc_id' , $request->sf_doc_id)
    //                     ->update($data);

    //     if ($update) {
    //         return redirect()->back()->with('success', 'Process update successed!');
    //     }
    //     else {
    //         return redirect()->back()->with('danger', 'Process update error!');
    //     }
    // }

    public function calendar(){
      
      $sf_act_history = DB::table('sf_ach_history')->get();
      $act_history_list = [];
      foreach ($sf_act_history as $key => $history) {
        $act_history_list[] = Calendar::event(
                $history->sf_acthist_feedback,
                true,
                new \DateTime($history->created_at),
                new \DateTime($history->updated_at.' +1 day')
            );
      }
      $calendar_details = Calendar::addEvents($act_history_list); 
 
        return view('lead.calendar', compact('calendar_details') );
    }
}
