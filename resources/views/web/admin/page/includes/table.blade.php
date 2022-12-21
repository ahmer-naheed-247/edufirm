<div class="row">
    <div class="col-xs-12">
    @include('includes.data_table_header')
        <!-- div.table-responsive -->
        @if (isset($data['rows']) && $data['rows']->count() > 0)
            <div class="table-responsive">
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label>
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Detail</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
                    @foreach($data['rows'] as $row)
                        <tr>
                            <td class="center">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="{{ encrypt($row->id) }}" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>
                                <div id="faq-list-4" class="panel-group accordion-style1 accordion-style2">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a href="#{{$row->id}}" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
                                                <i class="ace-icon fa fa-arrow-down"></i>
                                                {!!  $row->title !!}
                                                @if($row->page_type == "link-page")
                                                    <span class="btn-xs btn-info pull-right">Link</span>
                                                @elseif($row->page_type == "predefine-link")
                                                    <span class="btn-xs btn-warning pull-right">PreDefine </span>
                                                @else
                                                    <span class="btn-xs btn-primary pull-right">Content </span>
                                                @endif
                                            </a>
                                            <hr class="hr-2">
                                            <span class="label label-sm label-primary">
                                                Publish On - {{ date('jS M, Y', strtotime($row->created_at)) }}
                                            </span>
                                            <span class="label label-sm label-success">
                                                Last Updated - {{ date('jS M, Y', strtotime($row->updated_at)) }}
                                            </span>
                                        </div>

                                        <div class="panel-collapse collapse" id="{{$row->id}}" style="height: 0px;">
                                            <div class="panel-body">
                                                @if ($row->image)
                                                    <img src="{{ asset('web/'.$folder_name.'/'.$row->image) }}" width="150">
                                                    <br>
                                                @else
                                                    <p>No image</p>
                                                @endif
                                                {!! $row->title !!}
                                                {!! $row->detail_desc !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-minier dropdown-toggle {{ $row->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $row->status == 'active'?"Active":"In Active" }}
                                        <i class="ace-icon fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route($base_route.'.active', ['id' => encrypt($row->id)]) }}" title="Active"><i class="ace-icon fa fa-check"></i> Active</a>
                                        </li>

                                        <li>
                                            <a href="{{ route($base_route.'.in-active', ['id' => encrypt($row->id)]) }}" title="In-Active"><i class="ace-icon fa fa-remove"></i> InActive</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                            <td>
                                <div class=" btn-group">

                                    <a href="{{ route($base_route.'.view', ['id' => encrypt($row->id)]) }}" class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route($base_route.'.edit', ['id' => encrypt($row->id)]) }}" class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-edit"></i>
                                    </a>

                                    <a href="{{ route($base_route.'.delete', ['id' => encrypt($row->id)]) }}" class="btn btn-xs btn-danger bootbox-confirm">
                                        <i class="ace-icon fa fa-trash"></i>
                                    </a>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                    {!! Form::close() !!}
                     <tr>
                         <td colspan="7">{!! $data['rows']->appends($data['filter_query'])->links() !!}</td>
                     </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
