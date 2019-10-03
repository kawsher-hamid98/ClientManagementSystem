@extends('layout')

@section('wpage')


<div class="container">

    @if(isset($details))

        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>customerName</th>
                <th>File</th>
                <th>Phone Number</th>
                <th>Preferenc Type</th>
                <th>More Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->customerName}}</td>
                <td>{{$user->customerFileNo}}</td>
                <td>{{$user->customerPhoneNo}}</td>
                <td>{{$user->preferenceType}}</td>
                <td><a href="{{ url('/cityCustomerData/' . $user -> id) }}">More Details</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

    @endif

</div>

@endsection
