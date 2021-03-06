@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Condition</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">General</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <h4 style="margin-bottom: 50px">Create General Condition</h4>
    <form method="POST" action="/condition/create/general">
        <div class="row">
            <div class="input-field col s12">
                <input name="condition_name" type="text" class="validate">
                <label for="condition_name">Condition Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="discount_price" type="text" class="validate">
                <label for="discount_price">Discount (%)</label>
            </div>
            <div class="input-field col s6">
                <input name="min_price" type="text" class="validate">
                <label for="min_price">Min Price (ex. over 200,000 THB)</label>
            </div>
        </div>
        <!-- Submit Button -->
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
            <div class="col s12" style="text-align: right;">
                <button type="submit" class="waves-effect waves-light btn">Create Condition
                </button>
            </div>
        </div>
    </form>
@endsection