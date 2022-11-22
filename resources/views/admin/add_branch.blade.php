@extends('admin/app')
@section('js')
@endsection
@section('main_content')

    <div class="right_col" role="main">
        <div class="x_panel">
            <div class="x_title">
                <h2>Yeni Filial</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" method="post"  enctype="multipart/form-data" action="/admin/submit_branch" data-parsley-validate class="form-horizontal form-label-left">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="name" value="{{isset($branch) ? $branch->name:null}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ünvanı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="address" value="{{isset($branch) ? $branch->address:null}}" name="address" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Logo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="logo_path" value="{{isset($branch) ? $branch->logo:null}}" name="logo_path" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Şəbəkə<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="network_id" name="network_id" required="required"  class="form-control col-md-7 col-xs-12">
                                @foreach($networks as $network)
                                    @if (isset($branch) and $network->branch_id==$branch->id)
                                        <option value="{{$network->id}}"
                                                selected="selected">{{$network->name}}</option>
                                    @else
                                        <option value="{{$network->id}}">{{$network->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Yadda Saxla</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('css')
@endsection