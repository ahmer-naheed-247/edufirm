@extends('user-student-online-registration.layouts.master')

@section('css')

@endsection

@section('content')

    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                @include('layouts.includes.template_setting')
                <div class="page-header">
                    <h1>
                       Download
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            List
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    @include('includes.flash_messages')
                    <div class="col-md-12 col-xs-12">
                        @include('user-student-online-registration.download.includes.table')
                    </div>
                </div><!-- /.row -->
                </div>
            </div>

            </div><!-- /.page-content -->
    </div><!-- /.main-content -->



@endsection

@section('js')
    @include('includes.scripts.dataTable_scripts')
@endsection