@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Main Menu</div>

                <div class="panel-body">
                    <table class="table table-bordered"><br>
                        <th colspan="3">User Information</th>
                        <tr>
                            <td> Name </td><td> : </td><td><b>{{ Auth::user()->name }}</b> </td>
                        </tr>
                        <tr>
                            <td> Email </td><td> : </td><td><b>{{ Auth::user()->email }}</b> </td>
                        </tr>
                    </table>


                    <br><hr>

            <table class="table table-bordered">
                    <h3>Tasks</h3>
                            
                        <th width="2px"> No </th> <th> Details </th> <th width="15px"> Creator </th> <th width="15px"> Receiver </th>  <th width="15px"> Status </th> 
                        <tr>
                            <td><b></b> </td> <td><b></b>  </td> <td><b>{{ Auth::user()->name }}</b> </td> <td><b>{{ Auth::user()->name }}</b> </td> <td><b></b> </td> 
                          
                        </tr>
                    </table>

                    <br><hr>

                    <h3>Claim Requests</h3>
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

                    <br><hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
