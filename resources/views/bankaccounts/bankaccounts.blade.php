@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Bank Accounts
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('bankaccounts.add')}}" role="button">
                        New Bank Account +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->
                @foreach($bankaccounts as $bankaccount)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-title">
                                    {{ $bankaccount->bank_name }}
                                </h4>
                            </a>
                        </div>
                        <div>
                            <p>Branch: {{ $bankaccount->bank_branch }}</p>
                            <p>Name: {{ $bankaccount->bank_name }}</p>
                            <p>Account Number: {{ $bankaccount->account_number }}</p>
                            <p>Account name: {{ $bankaccount->account_name }}</p>
                            
                        </div>
                        <div class="card-block">
                            <a class="card-link" href="{{route('bankaccounts.edit', $bankaccount->id)}}">
                                Edit Bank Account
                            </a>
                            <form action="{{route('bankaccounts.delete', $bankaccount->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

@endsection
            