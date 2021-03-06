@extends('Dashboard::backend.default.master')

@section('title')
    List Guestbooks of {{$memorial->name}}
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('backend.memorial.index')}}" class="btn btn-primary"><i class="fa fa-angle-double-left"></i> Back</a>
                    <a href="{{route('backend.memorial.guestbook.create', [$memorial->id])}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover dataTables" id="dataTables">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th class="task">Task</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($guestbooks as $guestbook)
                                <tr class="odd gradeX">
                                    <td>{{$guestbook['id']}}</td>
                                    <td>{{$guestbook['title']}}</td>
                                    <td>{!! str_limit($guestbook['description'], 100, '...') !!}</td>
                                    <td>{{$guestbook['created_at']}}</td>

                                    <td class="center" style="min-width: 100px;">
                                        {!! Form::open(['route' => ['backend.memorial.guestbook.destroy', $guestbook['mem_id'], $guestbook['id'] ], 'method' => 'delete', 'class' => 'form-delete']) !!}
                                        <div class="btn-group" role="group" aria-label="...">
                                            <a href="{{route('backend.memorial.guestbook.edit',[$guestbook['mem_id'], $guestbook['id']])}}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i> Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop
