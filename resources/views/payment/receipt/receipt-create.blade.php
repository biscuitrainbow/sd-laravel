@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Payment</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Receipt</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <form action="">
        <div class="row">
            <div class="input-field col s6">
                <input id="saleorderno" type="text" class="validate">
                <label for="saleorderno">Sale Order Number</label>
            </div>
            <div class="input-field col s6">
                <input id="saleorderno" type="text" class="validate" placeholder="ex. cash, credit card, check note">
                <label for="saleorderno">Term</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="date" type="text" disabled>
                <label for="goodsissuedate">Payment Date</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Receipt Document</a></div>
        </div>
    </form>
@endsection()