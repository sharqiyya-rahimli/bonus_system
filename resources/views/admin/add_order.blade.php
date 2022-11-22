@extends('admin/app')
@section('js')
@endsection
@section('main_content')

    <div class="right_col" role="main">
        <div class="x_panel">
            <div class="x_title">
                <h2>Yeni Sifariş</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" method="post"  enctype="multipart/form-data" action="/admin/submit_order" data-parsley-validate class="form-horizontal form-label-left">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Müştəri İD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="client_id" name="client_id" value="{{isset($order) ? $order->name:null}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tarix <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class='input-group date' id='myDatepicker2'>
                                <input id='order_date' name='order_date' required="required" type='text' class="form-control" />
                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact">Məbləğ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="total_amount" value="{{isset($order) ? $client->sum:null}}" name="total_amount" class="form-control col-md-7 col-xs-12">
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