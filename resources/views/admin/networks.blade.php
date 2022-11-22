@extends('admin/app')
@section('js')
@endsection
@section('main_content')

    <div class="right_col" role="main">
        <div class="x_panel">
            <div class="x_title">
                <h2>Şəbəkələr</h2>

                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="add_network">
                            <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Yeni</button>
                        </a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" action="/admin/networks" method="get">
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
                        <th>Əməliyyatlar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($networks as $network)
                        <tr>
                            <th scope="row">{{$network->id}}</th>
                            <td>{{$network->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $networks->links() }}
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('css')
@endsection