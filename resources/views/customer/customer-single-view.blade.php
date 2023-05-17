@extends('layouts.app')
@section('title', 'Single View')
@section('contents')
<div class="card">
    <div class="text primary fs-2 text-center text-primary mt-3">
        <b class="shadow p-2 rounded background-primary">
            {{ __('Customer View') }}
        </b>
    </div>
    <div class="card-body mx-5 shadow mt-5 mb-5 rounded">
        <div class="card-header text-info fs-3">{{ __('Customer Detail') }}</div>
        <table class="table table-striped p-4 text-center">
            <tbody>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <td>{{ $userDetails->name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Email') }}</th>
                        <td>{{ $userDetails->email }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Money') }}</th>
                        <td>{{ $userDetails->balance }}<b>₹</b></td>
                    </tr>
            </tbody>
        </table>
        <div class="btn btn-primary float-end" onclick="history.back()">Back</div>      
    </div> 
    <div class="m-3"></div>
</div>
@endsection



