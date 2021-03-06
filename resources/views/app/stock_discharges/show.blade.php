@extends('layouts.appbar')

@section('title', 'DIT Restuarant')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1> @lang('crud.stock_discharges.show_title')</h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                    <a class="breadcrumb-item" href="{{ route('cafeDashboard') }}"> Dashboard</a>
                    <a class="breadcrumb-item" href="{{ route('stock-discharges.index') }}"> Stock Discharge</a>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-success">
                    <div class="card-header border-success">
                        <h4 class="card-title">
                            <!-- edit thisItem Category (uses the edit method found at GET /user/{id}/edit -->
                            <a><span class="glyphicon glyphicon-edit"></span>
                               Item Stock Item Details:
                             </a>
                             <a class="btn btn-sm btn-info" href="{{ route('stock-discharges.edit', $stockDischarge) }}">
                                 <span class="glyphicon glyphicon-edit"></span><i class="ti-pencil-alt"></i>
                                 Edit Stock Item
                             </a>
                             <a class="btn btn-sm btn-dark float-right" href="{{ url()->previous() }}" ><span><i class="ti-angle-double-left"></i>
                                Back </span>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <div class="container-fluid">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="display-details">
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.quantity_issued')
                                        </h6></strong><h4>{{ $stockDischarge->quantity_issued ?? '-' }}</h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.stock_table_id'): 
                                        </strong>{{ optional($stockDischarge->stockTable)->item_name ?? '-' }}</h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.unit_id'): 
                                        </strong>{{ optional($stockDischarge->unit)->unit_name ?? '-'}} </h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.res_section_id')
                                        </h6></strong><h4>{{ optional($stockDischarge->resSection)->section_name ?? '-' }}</h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.return_date')
                                        </h6></strong><h4>{{ $stockDischarge->return_date ?? '-' }} </h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.remarks')
                                        </h6></strong><h4>{{ $stockDischarge->remarks ?? '-' }}</h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.issued_by')
                                        </h6></strong><h4>{{ $stockDischarge->issued_by ?? '-' }}</h4>
                                        <h6><strong>
                                            @lang('crud.stock_discharges.inputs.user_id')
                                        </h6></strong><h4>{{ optional($stockDischarge->user)->name ?? '-'}} </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>   
                </div>
            </div>    
        </div>
        
        @include('partials.footer') 
    </section>
</div>
@endsection

    