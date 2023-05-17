<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  
  public function index(){
    return view('customer.index');
  }

  public function customer(){
    return view('customer.cutomer_add');
  }

  public function customer_list(){
    $users = User::all();
    return view('customer.customer-list', compact('users'));
  }

  public function customer_detail($id){
    $userDetails = User::find($id);
    return view('customer.customer-single-view', compact('userDetails'));
  }

  public function money_transfer_index($id){
    $userDetails = User::find($id);
    $transactionId = rand(1000000,9999999);
    $userList = User::all();
    return view('customer.add', compact('userDetails', 'transactionId', 'userList')); 
  }

  public function money_transfer(Request $request){

    $validated = $request->validate([
        'receiver' => 'required|',
        'amount' => 'required|numeric',
    ]);
    
    $transaction = new Transaction;
    $transaction->transactionId = $request->transactionId;
    $transaction->sender = $request->sender;
    $transaction->receiver = $request->receiver;
    $transaction->amount = $request->amount;
    $transaction->save();
    return redirect()->back()->with('message', "Transaction Success.");
  }

  public function transaction_history(){
    $transactions = Transaction::all();
    return view('customer.transaction-history', compact('transactions'));
  }
}