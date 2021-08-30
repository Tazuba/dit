@extends('layouts.appbar')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Available Stock</span></h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('cafeDashboard') }}"> Dashboard</a>
                        <a class="breadcrumb-item" href="{{ route('stock-tables.index') }}"> Stock Management</a>
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
                            <!-- Create new User-->
                            <a><span class="glyphicon glyphicon-edit"></span>
                                Stock Actions:
                            </a>
                            <!--Put Register link-->
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#addStock">
                                <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                Add New stock item
                            </button>
                            <button class="btn btn-sm btn-info ml-4" data-toggle="modal" data-target="#dischargeStock" href="{{ route('stock-tables.create') }}">
                                <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                Stock Discharge
                            </button>
                            <button class="btn btn-sm btn-info ml-4" data-toggle="modal" data-target="#recieptUpload" href="{{ route('stock-tables.create') }}">
                                <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                Upload Receipts
                            </button>
                            
                            <a class="btn btn-sm btn-dark float-right ml-2" href="{{ url()->previous() }}"><span><i class="ti-angle-double-left"></i>
                                    Back </span>
                            </a>
                            <a class="btn btn-sm btn-success float-right ml-2" href="{{ url('exports')}}"><span><i class="ti-angle-double-left"></i>
                                    Export to Excell </span>
                            </a>
                            <button onclick="" class="btn btn-sm btn-danger float-right ml-2" ><span><i class="ti-angle-double-left"></i>
                                    Generate PDF </span>
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 float-right">

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table_id" class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th class="text-left">
                                            Item id
                                        </th>
                                        <th class="text-left">
                                            Item Name
                                        </th>
                                        <th class="text-left">
                                            Category
                                        </th>
                                        <th class="text-left">
                                            Available Stock
                                        </th>
                                        <th class="text-left">
                                            Store Section
                                        </th>

                                        <th class="text-center">
                                            @lang('crud.common.actions')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $resProducts = DB::select("select * from available_stock");
                                    @endphp
                                    @forelse ($resProducts as $stockTable)
                                    <tr>
                                        <td>{{ $stockTable->item_id ?? '-' }}</td>
                                        <td>{{ $stockTable->Name ?? '-' }}</td>
                                        <td>{{ $stockTable->Category ?? '-' }}</td>
                                        <td>{{ $stockTable->instock  ?? '-' }}-{{ $stockTable->units  ?? '-' }}</td>
                                        <td>{{ $stockTable->section  ?? '-' }}</td>
                                        <td class="text-center" style="width: 134px;">
                                            <div role="group" aria-label="Row Actions" class="btn-group">
                                                @can('update', $stockTable)
                                                <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#editStock">
                                                    <i class="icon ti-pencil-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-light text-danger" data-toggle="modal" data-target="#deletStock">
                                                    <i class="icon ti-trash"></i>
                                                </button>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2">
                                            @lang('crud.common.no_items_found')
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">{!! $stockTables->render() !!}</td>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        @include('partials.modals.stockAction.deletStock')
         @include('partials.modals.stockAction.recieptUpload')
        @include('partials.modals.stockAction.addStock')
        @include('partials.modals.stockAction.editStock')
        @include('partials.modals.stockAction.dischargeStock')
        @include('partials.footer')
    </section>
</div>
@endsection
