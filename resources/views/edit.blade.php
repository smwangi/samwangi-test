<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title></title>

    <!-- Icons font CSS-->
    <link href="/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Registration Form</h2>
                <form method="POST" action="{{route('update',['id' => $project->id])}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Project Ref</label>
                                <input class="input--style-4" type="text" value="{{$project->project_ref}}" name="project_ref">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">country</label>
                                <input class="input--style-4" type="text" name="country" value="{{$project->country}}">
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Implementing Officer</label>
                                <input class="input--style-4" type="text" name="implementing_officer" value="{{$project->implementing_officer}}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Project Title</label>
                                <input class="input--style-4" type="text" name="project_title" value="{{$project->project_title}}">
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Grant(USD)</label>
                                <input class="input--style-4" type="text" name="grant_amount" value="{{$project->grant_amount}}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Date from GCF</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="date_from_gcf" value="{{$project->date_from_gcf}}">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Duration</label>
                                <input class="input--style-4" type="text" name="duration" value="{{$project->duration}}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Start Date</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="start_date" value="{{$project->start_date}}">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">End Date</label>
                                <input class="input--style-4 js-datepicker" type="text" name="end_date" value="{{$project->end_date}}">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Readiness or NAP</label>
                                <input class="input--style-4" type="text" name="readiness_or_nap" value="{{$project->readiness_or_nap}}">
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Types of readiness</label>
                                <input class="input--style-4" type="text" name="types_of_readiness" value="{{$project->types_of_readiness}}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">First disbursement amount</label>
                                <input class="input--style-4" type="text" name="first_disbursement_amount" value="{{$project -> first_disbursement_amount}}">
                            </div>
                        </div>
                    </div>


                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Status</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Completed
                                        <input type="radio" checked="checked" name="status" value="Completed">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Under Implementation
                                        <input type="radio" name="status" value="Under Implementation">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="/assets/vendor/select2/select2.min.js"></script>
<script src="/assets/vendor/datepicker/moment.min.js"></script>
<script src="/assets/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="/assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
