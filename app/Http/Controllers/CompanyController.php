<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        echo 'Index Page';
    }

    public function create()
    {
        $form = \DataForm::create();
        //Application Category
        $form->add('category','Category:','radiogroup')
            ->option('iuta','IUTA')
            ->option('cuta','CUTA');
        $form->add('marketing_type','Type of Marketing Approach: ','radiogroup')
            ->option('direct','Direct')
            ->option('nominate','Nominate');
        //Application
        $form->text('name','Name: ');
        $form->add('type','Type:','radiogroup')
            ->option('sdn. bhd.', 'Sendirian Berhad')
            ->option('bhd','Berhad');
        $form->text('reg_number','Registration Number: ');
        $form->text('date_incorporation','Date of Incorporation: ');
        $form->textarea('registered_address','Registered Address: ');
        $form->textarea('correspondent_address','Correspondent Address: ');
        $form->text('comp_tel_no','Tel. No: ');
        $form->text('comp_fax_no','Fax No.: ');
        $form->text('website','Website: ');
        $form->add('ownership','Type of Ownership: ','select')
            ->option('','Please select...')
            ->option('bumi','Bumi Controlled Company')
            ->option('foreign','Foreign Controller Company')
            ->option('non-bumi','Non-Bumi Controlled Company')
            ->option('others','Others');
        $form->text('paid_capital','Paid Up Capital: ');
        $form->text('nature_business','Nature of Business: ');
        //Authorized Representative
        $form->text('rep_name','Name(As Per NIC): ');
        $form->text('rep_designation','Designation: ');
        $form->text('rep_department','Department: ');
        $form->text('rep_tel_no','Tel no.: ');
        $form->text('rep_fax_no','Fax no.: ');
        $form->text('rep_email','Email: ');
        //Alternate Authorized Representative
        $form->text('alt_authorized_rep','Name(As Per NIC): ');
        $form->text('alt_designation','Designation: ');
        $form->text('alt_department','Department: ');
        $form->text('alt_rep_tel_no','Tel no.: ');
        $form->text('alt_rep_fax_no','Fax no.: ');
        $form->text('alt_rep_email','Email: ');
        //Contact Person
        $form->text('pc_name','Name(As Per NIC): ');
        $form->text('pc_designation','Designation: ');
        $form->text('pc_department','Department: ');
        $form->text('pc_rep_tel_no','Tel no.: ');
        $form->text('pc_rep_fax_no','Fax no.: ');
        $form->text('pc_rep_email','Email: ');
        //Distribution Points and Collection Points
        $form->number('distribution_points','No. of Distribution Points: ');
        $form->number('mobile_distribution_points','No. of Mobile Distribution Points: ');
        $form->number('collection_points','No. of collection Points: ');
        //Unit Trust Consultants
        $form->number('proposed_no_uts_consultant','Proposed No. of UTS Consultants: ');

        $form->submit('Save');
        $form->build();
        $form->passed(function() use ($form)
        {
            dd(\Input::all());
        });

        return view('pages.company.registration', compact('form'));
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
