@extends('layout')
@section('title','首页1')
@section('header')
    <h1>
        首页
        <small>用户的收支与入住人数总揽</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        {{--<li><a href="#">Layout</a></li>--}}
        {{--<li class="active">Fixed</li>--}}
    </ol>
@endsection
@section('content')
    <!-- /.box -->
    <div class="row">
        <div class="col-md-6">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">收入</h3>
                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">房租:</th>
                                <td>$250.30</td>
                            </tr>
                            <tr>
                                <th>水电气:</th>
                                <td>$10.34</td>
                            </tr>
                            <tr>
                                <th>装修:</th>
                                <td>$5.80</td>
                            </tr>
                            <tr>
                                <th>广告:</th>
                                <td>$265.24</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-6">

            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">支出</h3>
                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">入住人数:</th>
                                <td>$250.30</td>
                            </tr>
                            <tr>
                                <th>房租收入:</th>
                                <td>$10.34</td>
                            </tr>
                            <tr>
                                <th>剩余房数:</th>
                                <td>$5.80</td>
                            </tr>
                            <tr>
                                <th> 其他:</th>
                                <td>$265.24</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.col (left) -->
    </div>
    @if(isset($dd))
    <div class="btn btn-block btn-danger btn-lg">
        <h4>超出收入总额!</h4>

        <p><i>多花了</i>>10000.元</p>
    </div>
    @else
    <div class="btn btn-block btn-success btn-lg">
        <h4>这月没有白忙活!</h4>

        <p><i><d>10.</d></i>元</p>
    </div>
    @endif
@endsection