@extends('layouts.system')

@section('title','Company Registration')

@section('content')
        <h3>Company Registration</h3>
        <hr>
        {!! $form->header !!}
        {!! $form->message !!} <br/>
        @if(!$form->message)
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#1">Application Category</a></li>
                            <li><a data-toggle="tab" href="#2">Applicant</a></li>
                            <li><a data-toggle="tab" href="#3">Authorized Representative</a></li>
                            <li><a data-toggle="tab" href="#4">Contact Person</a></li>
                            <li><a data-toggle="tab" href="#5">Distribution and Collection Points</a></li>
                            <li><a data-toggle="tab" href="#6">Unit Trust Consultants</a></li>
                            <li><a data-toggle="tab" href="#7">Checklist for Sumbission</a></li>
                            <li><a data-toggle="tab" href="#8">Confirmation of Applicant</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="1" class="tab-pane fade in active">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Application Category</h4>
                                    </div>
                                    <div class="panel-body">
                                        {!! $form->render('category') !!}
                                        {!! $form->render('marketing_type') !!}
                                    </div>

                                </div>
                            </div>
                            <div id="2" class="tab-pane fade in">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Applicant (applicable to companies incorporated under Companies Act 1963)</h4>
                                    </div>
                                    <div class="panel-body">
                                        {!! $form->render('name') !!}
                                        {!! $form->render('type') !!}
                                        {!! $form->render('reg_number') !!}
                                        {!! $form->render('date_incorporation') !!}
                                        {!! $form->render('registered_address') !!}
                                        {!! $form->render('correspondent_address') !!}
                                        {!! $form->render('comp_tel_no') !!}
                                        {!! $form->render('comp_fax_no') !!}
                                        {!! $form->render('website') !!}
                                        {!! $form->render('ownership') !!}
                                        {!! $form->render('paid_capital') !!}
                                        {!! $form->render('nature_business') !!}
                                    </div>
                                </div>
                            </div>
                            <div id="3" class="tab-pane fade in">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Authorised Representative</h4>
                                    </div>
                                    <div class="panel-body">
                                        {!! $form->render('rep_name') !!}
                                        {!! $form->render('rep_designation') !!}
                                        {!! $form->render('rep_department') !!}
                                        {!! $form->render('rep_tel_no') !!}
                                        {!! $form->render('rep_fax_no') !!}
                                        {!! $form->render('rep_email') !!}
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Alternate Authorised Representative</h4>
                                    </div>
                                    <div class="panel-body">
                                        {!! $form->render('alt_authorized_rep') !!}
                                        {!! $form->render('alt_designation') !!}
                                        {!! $form->render('alt_department') !!}
                                        {!! $form->render('alt_rep_tel_no') !!}
                                        {!! $form->render('alt_rep_fax_no') !!}
                                        {!! $form->render('alt_rep_email') !!}
                                    </div>
                                </div>
                            </div>
                            <div id="4" class="tab-pane fade in">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Contact Persons</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p><b>a)</b> Primary Contact Person: </p>
                                        {!! $form->render('pc_name') !!}
                                        {!! $form->render('pc_designation') !!}
                                        {!! $form->render('pc_department') !!}
                                        {!! $form->render('pc_rep_tel_no') !!}
                                        {!! $form->render('pc_rep_fax_no') !!}
                                        {!! $form->render('pc_rep_email') !!}
                                        <p><b>b)</b> Secondary Contact Person: </p>
                                        {!! $form->render('pc_name') !!}
                                        {!! $form->render('pc_designation') !!}
                                        {!! $form->render('pc_department') !!}
                                        {!! $form->render('pc_rep_tel_no') !!}
                                        {!! $form->render('pc_rep_fax_no') !!}
                                        {!! $form->render('pc_rep_email') !!}
                                    </div>
                                </div>
                            </div>
                            <div id="5" class="tab-pane fade in">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Distribution of Points</h4>
                                    </div>
                                    <div class="panel-body">
                                        {!! $form->render('distribution_points') !!}
                                        {!! $form->render('mobile_distribution_points') !!}
                                        {!! $form->render('collection_points') !!}
                                    </div>
                                </div>
                            </div>
                            <div id="6" class="tab-pane fade in">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Unit Trust Consultants</h4>
                                    </div>
                                    <div class="panel-body">
                                        {!! $form->render('proposed_no_uts_consultant') !!}
                                    </div>
                                </div>
                            </div>
                            <div id="7" class="tab-pane fade in"></div>
                            <div id="8" class="tab-pane fade in"></div>
                            <div id="9" class="tab-pane fade in"></div>
                        </div>
                    </div>
                </div>

            </div>
        @endif
        {!! $form->footer !!}
@stop
