@extends('layout.app')

@push('title')
<title>Form</title>
@endpush

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Forms</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="{{ route('form')}}">
                            <i class="fas fa-home"></i> Basic Form
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <h2 class="card-inside-title">Personal Details</h2>
                <br>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">User Name</h2>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter Username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Password</h2>
                            <div class="form-line">
                                <input type="password" class="form-control" placeholder="Enter Password" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">User ID</h2>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter User ID like abc@1234" />
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Name</h2>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h2 class="card-inside-title">Contact No</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter Contact No" />
                            </div>
                        </div>
                        <h2 class="card-inside-title">Relation</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter Relation" />
                            </div>
                        </div>
                        <h2 class="card-inside-title">City</h2>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control">
                                    <option value="">Select City</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Baroda">Baroda</option>
                                    <option value="Sabarkantha">Sabarkantha</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>

                <h2 class="card-inside-title">Information</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Specify about yourself" />
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">Status</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line focused">
                                <input type="text" class="form-control" value="" placeholder="Enable" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line disabled">
                                <input type="text" class="form-control" placeholder="Disabled" disabled/>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">Description</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                            <label for="textarea2">Textarea</label>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">File Upload</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <form action="#">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<!-- Checkbox -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <h2 class="card-inside-title">Choose Color</h2>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-check m-l-10">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value=""> Purple
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check m-l-10">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value=""> Red
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Checkbox -->

<!-- Radio -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>Gender</strong>
                </h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input name="group1" type="radio" />
                                <span>Male</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input name="group1" type="radio" checked />
                                <span>Female</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Radio -->

<!-- DateTime Picker -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>Select</strong> Date
                </h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <label for="email_address">Date Picker</label>
                                <input id="myDatePicker" class="flatPicker"
                                    placeholder="Please choose a date...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- #END# DateTime Picker -->
@endsection
