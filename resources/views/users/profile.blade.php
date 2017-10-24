@extends('layouts.app')

@section('content')
<!-- PAGE CONTENT BEGINS -->
            <div class="clearfix">
            <div class="hr dotted"></div>

            <div>
            <div class="">
            <div id="user-profile-3" class="user-profile row">
            <div class="col-sm-offset-1 col-sm-10">
            <div class="space"></div>
            <form class="form-horizontal">
            <div class="tabbable">
            <ul class="nav nav-tabs padding-16">
                <li class="active">
                    <a data-toggle="tab" href="#edit-basic">
                        <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                        Edit Info
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#edit-settings">
                        <i class="purple ace-icon fa fa-cog bigger-125"></i>
                        Settings
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#edit-password">
                        <i class="blue ace-icon fa fa-key bigger-125"></i>
                        Password
                    </a>
                </li>
            </ul>
            @foreach($admindata as $admin)
            <div class="tab-content profile-edit-tab-content">
                <div id="edit-basic" class="tab-pane in active">
                    <h4 class="header blue bolder smaller">General</h4>

                    <div class="row">
                    <form><!--Profile-photo-->
                        <div class="col-xs-12 col-sm-3 center">
                            <span class="profile-picture">
                                <img class="editable img-responsive" height="100" width="100" alt="Profile photo" id="avatar2" src="{{ asset('images/'.$admin->photo) }}" />
                            </span>
                            <div class="space space-4"></div>
						</div><!-- /.col -->
                    </form>

                        <div class="vspace-12-sm"></div>
                    <form method="post" action="{{ url('admins/update') }}"><!--biodata-->
                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-first">First Name</label>
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" id="form-field-first" placeholder="First Name" value="{{ $admin->firstName }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Last Name</label>
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" id="form-field-last" placeholder="Last Name" value="{{ $admin->lastName }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="space"></div>
                    <h4 class="header blue bolder smaller">Contacts</h4>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                        <div class="col-sm-9">
                            <span class="input-icon input-icon-right">
                                <input type="email" id="form-field-email" value="{{ $admin->email }}" />
                                <i class="ace-icon fa fa-envelope"></i>
                            </span>
                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                        <div class="col-sm-9">
                            <span class="input-icon input-icon-right">
                                <input class="input-medium input-mask-phone" type="text" value="{{ $admin->phone }}" id="form-field-phone" />
                                <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                            </span>
                        </div>
                    </div>
                    <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Save
                        </button>

                        &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
            </div>	
                </div>
                
                </form><!--Settings-->
                <div id="edit-settings" class="tab-pane">
                    <div class="space-10"></div>
                    <div>
                    <label>Delete my account</label>
                        <input type="button" value="Delete" name="form-field-checkbox" class="btn btn-danger" />
                    </div>
                </div>

                <div id="edit-password" class="tab-pane">
                    <div class="space-10"></div>
                    <form><!--Change Password-->
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                        <div class="col-sm-9">
                            <input type="password" id="form-field-pass1" />
                        </div>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                        <div class="col-sm-9">
                            <input type="password" id="form-field-pass2" />
                        </div>
                    </div>
                    <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="button">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Save
                </button>

                &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </button>
            </div>
            </div>
                    </form>
                </div>
            </div>
            </div>
            @endforeach
            </div><!-- /.span -->
            </div><!-- /.user-profile -->
            </div>

            <!-- PAGE CONTENT ENDS -->

@endsection
