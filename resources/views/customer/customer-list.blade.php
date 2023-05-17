@extends('layouts.app')
@section('title', 'Customer List')
@section('contents')
<div class="card">
    <div class="text primary fs-2 text-center text-primary mt-3">
        <b class="shadow p-2 rounded background-primary">
            {{ __('Customer List') }}
        </b>
    </div>
    <div class="card-body mx-5 shadow mt-5 mb-5 rounded">
        <div class="card-header text-info fs-3">{{ __('All Customers') }}</div>
        <table class="table table-striped p-4 text-center">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope=" ">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->balance }}<b>₹</b></td>
                        <td>
                            <a href="{{ route('customer-detail', $user->id) }}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{ route('money-transfer', $user->id) }}"><button class="btn btn-outline-success">Pay</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>       
        <div class="btn btn-primary float-end" onclick="history.back()">Back</div>
    </div>
</div>
@endsection



