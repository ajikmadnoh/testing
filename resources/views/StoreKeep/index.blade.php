@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Individual </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ url('/listClaim') }}"> Show all Claim</a>
                <a class="btn btn-success" href="{{ route('Claim.create') }}"> Create New Claim</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Date</th>
            <th>Description</th>
            <th>Food</th>
            <th>Fuel</th>
            <th>Tender</th>
            <th>Receipt</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($claims as $key => $claim)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $claim->name }}</td>
        <td>{{ $claim->date_claim }}</td>
        <td>{{ $claim->description }}</td>
        <td>{{ $claim->food }}</td>
        <td>{{ $claim->fuel }}</td>
        <td>{{ $claim->tender }}</td>
        <td>{{ $claim->receipt }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('Claim.show',$claim->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('Claim.edit',$claim->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Claim.destroy', $claim->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
</div>
    {!! $claims->render() !!}

@endsection