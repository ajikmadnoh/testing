@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                    <th colspan="3">User Information</th>
                        <tr>
                            <td> Name </td><td> : </td><td> {{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td> Email </td><td> : </td><td> {{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td> Created At </td><td> : </td><td> {{ Auth::user()->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
