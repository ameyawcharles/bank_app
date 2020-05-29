@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Bank Account 
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Notebook form==================== -->
                <form action="{{route('bankaccounts.save')}}" method="post">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="account_name" placeholder="Enter Account Name Here">
                        <input type="text" class="form-control" name="account_number" placeholder="Enter Account Number Here">
                        <input type="text" class="form-control" name="bank_name" placeholder="Enter Bank Name Here">
                        <input type="text" class="form-control" name="bank_branch" placeholder="Enter Branch Name Here">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Bank Account</button>
                </form>
            </div>

            @endsection
            
