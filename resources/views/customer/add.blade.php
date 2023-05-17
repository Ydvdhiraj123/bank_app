@extends('layouts.app')
@section('title', 'Money Transfer')
@section('contents')
<div class="card">
        <div class="card-body mx-5 shadow mt-5 mb-5 round-3">
            @if(session()->has('message'))
                <div class="alert alert-success" id="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close float-end border-0" data-dismiss="alert">{{ __('X') }}</button>
                </div>
            @endif
            <form action="{{ route('pay') }}" method="POSt">
                @csrf()
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('Transaction Id') }}</label>
                    <input type="text" name="transactionId" class="form-control" value="{{ $transactionId }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('Sender Name') }}</label>
                    <input type="text" class="form-control" name="sender" value="{{ $userDetails->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('Send To') }}</label>
                    <select name="receiver" id="" class="form-control form-select">
                        <option value="" selected>{{ __('Choose Customer') }}</option>
                        @foreach($userList as $list)
                            <option value="{{ $list->name }}">{{ $list->name }}</option>
                        @endforeach
                    </select>
                    @error('receiver')
                        <div class="text-danger">{{ __('Please Select Customer.') }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{ __('Amount') }}</label>
                    <input type="amount" name="amount" class="form-control">
                    @error('amount')
                        <div class="text-danger">{{ __('Please enter amount.') }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
       </div>
    </div>
@endsection



