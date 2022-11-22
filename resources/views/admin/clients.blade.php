@extends('admin/app')
@section('js')
@endsection
@section('main_content')

    <div class="right_col" role="main">
        <div class="x_panel">
            <div class="x_title">
                <h2>Müştərilər</h2>

                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="add_client">
                            <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Yeni</button>
                        </a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" action="/admin/clients" method="get">
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" id="name" name="name" value="{{app('request')->input('name')}}" class="form-control" placeholder="Axtar...">
                                <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Nömrə</th>
                        <th>Email</th>
                        <th>Doğum Tarixi</th>
                        <th>Əməliyyat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <th scope="row">{{$client->id}}</th>
                            <td>{{$client->name}}</td>
                            <td>{{$client->surname}}</td>
                            <td>{{$client->contact}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->birthdate}}</td>
                            
                           

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $clients->links() }}
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('css')
@endsection