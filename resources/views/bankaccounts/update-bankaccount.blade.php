@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Update Bank Account
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Notebook form==================== -->
                <form action="{{route('bankaccounts.update', $id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="account_name" placeholder="Enter Account Name Here" value="{{$bankaccount->account_name}}">
                        <input type="text" class="form-control" name="account_number" placeholder="Enter Account Number Here" value="{{$bankaccount->account_number}}">
                        <input type="text" class="form-control" name="bank_name" placeholder="Enter Bank Name Here" value="{{$bankaccount->bank_name}}">
                        <input type="text" class="form-control" name="bank_branch" placeholder="Enter Bank Branch Here" value="{{$bankaccount->bank_branch}}"> 
                    </div>
                    <button type="submit" class="btn btn-primary">Update Bank Account</button>
                </form>
            </div>

@endsection
            