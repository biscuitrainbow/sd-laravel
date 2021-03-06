@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Inquiry</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <h4 class="main-title">Goods issue</h4>
    <form action="{{route('UpdateGoodsIssue')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="hidden" name="saleorder_id" value="{{$sale_order[0]->id}}">
        <input type="hidden" name="condition_id" value="{{$sale_order[0]->condition_id}}">
        <input type="hidden" name="customer_id" value="{{$sale_order[0]->customer_id}}">
        <input type="hidden" name="request_date" value="{{$sale_order[0]->request_date}}">
        <input type="hidden" name="description" value="{{$sale_order[0]->description}}">


        <div class="row">
            <div class="col s12 ">
                <span class="form-title">General Infomation</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input disabled id="compy_name" type="text" value="{{$sale_order[0]->company_name}}">
                <label>Customer</label>
            </div>
            <div class="input-field col s4">
                <input disabled type="text" value="{{$sale_order[0]->created_at}}">
                <label>Create Date</label>
            </div>
            <div class="input-field col s4">
                <input disabled id="request_date" type="text" value="{{$sale_order[0]->request_date}}">
                <label for="requestdelivery">Request delivery date</label>
            </div>
        </div>


        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Materials</span>
            </div>
        </div>
        <div class="col s12">
            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Product id</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Order Quantity</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                    <tr>
                        <input type="hidden" name="material_id[]" value="{{$material->id}}">
                        <input type="hidden" name="quantity[]" value="{{$material->quantity}}">
                        <td>{{$material->code}}</td>
                        <td>{{$material->name}}</td>
                        <td>{{$material->price}}</td>
                        <td>{{$material->stock}}</td>
                        <td>{{$material->quantity}}</td>
                        @if ($material->quantity >$material->stock )
                            <td><span class="fail-badge">FAIL</span></td>
                        @else
                            <td><span class="pass-badge">PASS</span></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <!-- Submit Button -->
        <div class="row">
            <div class="col s12 margin-top-50" style="text-align: right;">
                <button type="submit" class="waves-effect waves-light btn">Create Goods Receipt</button>
            </div>
        </div>
    </form>
@endsection()

