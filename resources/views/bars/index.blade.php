@extends('layouts.app')

@section('title', __('Manage hotel'))

@section('content')
    <div class="container-fluid">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <a class="btn btn-info btn-sm" href="{{ URL::route('bars.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th width="20%">@lang('Logo')</th>
                                <th width="10%">@lang('Name')</th>
                                <th width="10%">@lang('Code')</th>
                                <th width="10%">@lang('Adress')</th>
                                <th scope="40%">@lang('About')</th>
                                <th scope="col">@lang('Edit')</th>
                                <th scope="col">+@lang('Admin')</th>
                                <th scope="col">@lang('View Admins')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bars as $bar)
                                <tr>
                                    <td>{{($loop->index + 1)}}</td>
                                    <td>
                                        <img class="img-responsive" style="max-height: 60px;" src="{{ asset('storage/logos')}}/{{ $bar->image }}" alt="">
                                    </td>
                                    <td>{{$bar->name}}</td>
                                    <td>{{$bar->code}}</td>
                                    <td>{{$bar->adress}}</td>
                                    <td>{{$bar->about}}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" role="button" href="{{ route('bars.edit', $bar) }}" dusk="edit-bar-link">
                                            <small>@lang('Edit bar')</small>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" role="button" href="{{url('register/admin/'.$bar->id.'/'.$bar->code)}}">
                                            <small>+ @lang('Create Admin')</small>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm" role="button" href="{{url('bar/admin-list/'.$bar->id)}}">
                                            <small>@lang('View Admins')</small>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $bars->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
