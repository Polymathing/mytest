@extends('layouts.master')

@section('title')
Dashboard | Smart Fast Pay
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Rates</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th> Currency </th>
                            <th> Base </th>
                            <th> Rate </th>
                            <ul>

                            </ul>
                            <th class="text-right"> Date </th>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($data as $item)
                                <td>{{print_r($item)}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection