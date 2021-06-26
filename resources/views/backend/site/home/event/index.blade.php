@extends('layouts.app')
@section('title','Event list')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="box-header">
                        <h3 class="box-title">All Event</h3>
                        <div class="">
                            <a class="btn btn-info btn-sm" href="{{ URL::route('event.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                        </div>
                    </div>
                    <div class="">
                        <table id="events" class="table table-bordered table-striped list_view_table">
                            <thead>
                            <tr>
                                <th width="30%">Image</th>
                                <th width="10%">Title</th>
                                <th width="25%">Description</th>
                                <th width="10%">Date</th>
                                <th width="10%">Time</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>
                                        <img class="img-responsive" style="max-height: 200px;" src="{{ asset('storage/events')}}/{{ $event->image }}" alt="">
                                    </td>
                                    <td>{{ $event->title }}</td>
                                    <td> {{ $event->description }}</td>
                                    <td> {{ $event->date }}</td>
                                    <td> {{ $event->time }}</td>
                                    <td>
                                    <div style="display: flex;">
                                        <div class="btn-group">
                                            <a title="Edit" href="{{URL::route('event.edit',$event->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>

                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <form class="myAction" method="POST" action="{{URL::route('event.destroy',$event->id)}}">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="fa fa-fw fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th width="30%">Image</th>
                                <th width="30%">Title</th>
                                <th width="25%">Description</th>
                                <th width="5%">Date</th>
                                <th width="5%">Time</th>
                                <th width="10%">Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
<!-- END PAGE CONTENT-->

<!-- BEGIN PAGE JS-->
@section('extraScript')
    <script type="text/javascript">
        $(document).ready(function () {
            Site.sliderInit();
            initDeleteDialog();
        });
    </script>
@endsection
<!-- END PAGE JS-->
