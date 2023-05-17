@extends('layouts.app')
@section('title', 'History')
@section('contents')
<div class="card">
    <div class="text primary fs-2 text-center text-primary mt-3">
        <b class="shadow p-2 rounded background-primary">
            {{ __('Transaction History') }}
        </b>
    </div>
    <div class="card-body mx-5 shadow mt-5 mb-5 rounded">
        <div class="card-header text-info fs-3">{{ __('All Transaction') }}</div>
        <table class="table table-striped p-4 text-center">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Transaction Id</th>
                    <th scope="col">Sender Name</th>
                    <th scope="col">Receiver Name</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id}}</td>
                    <td>{{ $transaction->transactionId}}</td>
                    <td>{{ $transaction->sender}}</td>
                    <td>{{ $transaction->receiver}}</td>
                    <td>{{ $transaction->amount}} <b>₹</b></td>
                </tr>
                @endforeach
            </tbody>
        </table>       
        <div class="btn btn-primary float-end" onclick="history.back()">Back</div>
    </div>
</div>
@endsection



