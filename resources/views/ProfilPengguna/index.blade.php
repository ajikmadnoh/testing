@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                    <table class="table table-bordered"><br>
                        <th colspan="3">General Information</th>
                        <tr>
                            <td> Name </td><td> : </td><td><b>{{ Auth::user()->name }}</b> </td>
                        </tr>
                        <tr>
                            <td> Email </td><td> : </td><td><b>{{ Auth::user()->email }}</b> </td>
                        </tr>
                    </table>


                    <br><hr>

           

                    <br><hr>

                    <br><hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
