<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bankaccount;

class BankaccountsController extends Controller
{
    public function ShowAddBankaccountForm(){
    	return view('bankaccounts.add-bankaccount');
    }

    public function addBankaccount(Request $request){
    	$account_name = $request->account_name;
    	$account_number = $request->account_number;
    	$bank_name = $request->bank_name;
    	$bank_branch = $request->bank_branch;
    	Bankaccount::create(

    		['account_name'=>$account_name,
    	 	 'account_number'=>$account_number,
    	     'bank_name'=>$bank_name,
    	     'bank_branch'=>$bank_branch
    	 	]
    	);
    	return redirect()->route('bankaccounts');
    	
    }

    public function showBankaccounts(){
    	$bankaccounts = Bankaccount::all();
    	return view('bankaccounts.bankaccounts', compact('bankaccounts'));
    }

    public function destroy($id){
    	Bankaccount::destroy($id);
    	return redirect()->route('bankaccounts');
    }

    public function showEditForm($id){
    	$bankaccount = Bankaccount::find($id);
    	return view('bankaccounts.update-bankaccount', compact('id', 'bankaccount'));
    }

    public function update(Request $request, $id){
    	$account_name = $request->account_name;
    	$account_number = $request->account_number;
    	$bank_name = $request->bank_name;
    	$bank_branch = $request->bank_branch;
    	$bankaccount = Bankaccount::find($id);
    	$bankaccount->update(

    		[
    			'account_name'=>$account_name,
    			'account_number'=>$account_number,
    			'bank_name'=>$bank_name,
    			'bank_branch'=>$bank_branch
    		]
    	);
    	return redirect()->route('bankaccounts');
    }



}



