<?php

namespace App\Http\Controllers;

use App\Models\unapplication;
use Illuminate\Http\Request;
use App\models\Country;

class ApplicationDataManagement extends Controller
{
    //view data
    public function index(){
        return view('view',['projects' => unapplication::paginate(10)]);
    }
    //view create form
    public function create(){
        $countries = Country::all()->toArray();
        return view('index')->with('countries',$countries) ;
    }

    //stores data to db
    public function store(Request $request)
    {

        $this->validate($request,
            [
                'project_ref'=>'required',
                'country'=>'required',
                'implementing_officer'=>'required'
            ]);

        $data = new unapplication();

        $data->project_ref = request('project_ref');
        $data->country = request('country');
        $data->implementing_officer = request('implementing_officer');
        $data->project_title = request('project_title');
        $data->grant_amount = request('grant_amount');
        $data->date_from_gcf = request('date_from_gcf');
        $data->start_date = request('start_date');
        $data->duration = request('duration');
        $data->end_date = request('end_date');
        $data->readiness_or_nap = request('readiness_or_nap');
        $data->types_of_readiness = request('types_of_readiness');
        $data->first_disbursement_amount = request('first_disbursement_amount');
        $data->status = request('status');

        $data->save();

        return redirect()->route('view');
    }

    //edit project
    public function edit($id){
        return view('edit',['project' => unapplication::find($id)]);
    }

    //update project
    public function update(Request $request, $id){
        $this->validate($request,
            [
                'project_ref'=>'required',
                'country'=>'required',
                'implementing_officer'=>'required'
            ]);

        $edited_project = unapplication::find($id);
        $edited_project->project_ref = request('project_ref');
        $edited_project->country = request('country');
        $edited_project->implementing_officer = request('implementing_officer');
        $edited_project->project_title = request('project_title');
        $edited_project->grant_amount = request('grant_amount');
        $edited_project->date_from_gcf = request('date_from_gcf');
        $edited_project->start_date = request('start_date');
        $edited_project->duration = request('duration');
        $edited_project->end_date = request('end_date');
        $edited_project->readiness_or_nap = request('readiness_or_nap');
        $edited_project->types_of_readiness = request('types_of_readiness');
        $edited_project->first_disbursement_amount = request('first_disbursement_amount');
        $edited_project->status = request('status');

        $edited_project->save();

        return redirect()->route('view');

    }

    //delete project
    public function destroy($id){
        unapplication::find($id)->delete();
        return redirect() -> route('view');
    }
}