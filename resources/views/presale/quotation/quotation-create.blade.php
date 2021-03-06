@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Quotation</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <form action="">
        <h4 class="main-title">Create Quotation</h4>
        <!-- Reference from Inquiry -->
        <div class="row">
            <div class="col s12">
                <h5 class="sub-title">Select Inquiry</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <!-- Table -->
                <table class="highlight">
                    <thead>
                    <tr>
                        <th>Inquiry No.</th>
                        <th>From</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inquiries as $inquiry)
                        <tr>
                            <td>{{$inquiry->id}}</td>
                            <td>{{$inquiry->customer->company_name}}</td>
                            <td><a href='/quotation/create/form/{{$inquiry->id}}'
                                   class="waves-effect waves-light btn">Create</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
@endsection()