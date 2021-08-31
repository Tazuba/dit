@extends('layouts.appbar')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Item Settings</h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('cafeDashboard') }}"> Dashboard</a>
                        <a class="breadcrumb-item" href="{{ route('item-categories.index') }}"> Item Categories</a>
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
                                @lang('crud.item_categories.index_title'):
                            </a>
                            <!--Put Register link-->
                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#addItem" href="">
                                <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                Add Item
                            </a>
                            <a class="btn btn-sm btn-info ml-4" data-toggle="modal" data-target="#addCategory" href="">
                                <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                Add Item Category
                            </a>
                            <a class="btn btn-sm btn-info ml-4" data-toggle="modal" data-target="#addUnits" href="">
                                <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                Add Item units
                            </a>

                            <a class="btn btn-sm btn-dark float-right" href="{{ url()->previous() }}"><span><i class="ti-angle-double-left"></i>
                                    Back </span>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 float-right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="card-title">
                                    <!-- Create new User-->
                                    <a><span class="glyphicon glyphicon-edit"></span>
                                        Available Items
                                    </a>
                                    <!--Put Register link-->
                                    <button class="btn btn-sm btn-danger">
                                        <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                        Export to PDF
                                    </button>
                                    <button class="btn btn-sm btn-success ml-4">
                                        <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                        Export to excel
                                    </button>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover" id="items">
                                        <thead>
                                            <tr>
                                                <th class="text-left">
                                                    NO
                                                </th>
                                                <th class="text-left">
                                                    Name
                                                </th>
                                                <th class="text-center">
                                                    @lang('crud.common.actions')
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $items = DB::select("select * from items");
                                            @endphp
                                            @forelse ($items as $itemCategory) <tr>
                                                <td>{{ $itemCategory->id  ?? '-' }}</td>
                                                <td>{{ $itemCategory->Item_name  ?? '-' }}</td>
                                                <td class="text-center" style="width: 134px;">
                                                    <div role="group" aria-label="Row Actions" class="btn-group">
                                                        @can('update', $itemCategory)
                                                        <a href="">
                                                            <button type="button" class="btn btn-sm btn-light">
                                                                <i class="icon ti-pencil-alt"></i>
                                                            </button>
                                                        </a>
                                                        @endcan @can('view', $itemCategory)
                                                        <a href="">
                                                            <button type="button" class="btn btn-sm btn-light text-success">
                                                                <i class="icon ti-eye"></i>
                                                            </button>
                                                        </a>
                                                        @endcan @can('delete', $itemCategory)
                                                        <form action="" method="POST" onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-light text-danger">
                                                                <i class="icon ti-trash"></i>
                                                            </button>
                                                        </form>
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
                                                <td colspan="4">
                                                    {!! $itemCategories->render() !!}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="table-responsive">
                                    <h4 class="card-title">
                                        <!-- Create new User-->
                                        <a><span class="glyphicon glyphicon-edit"></span>
                                            Available Categories
                                        </a>
                                        <!--Put Register link-->
                                        <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#addItem" href="">
                                            <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                            Export to PDF
                                        </a>
                                        <a class="btn btn-sm btn-success ml-4" data-toggle="modal" data-target="#addCategory" href="">
                                            <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                            Export to excel
                                        </a>
                                    </h4>
                                    <table class="table table-borderless table-hover" id="categories">
                                        <thead>
                                            <tr>
                                                <th class="text-left">
                                                    NO.
                                                </th>
                                                <th class="text-left">
                                                    Category Name
                                                </th>
                                                <th class="text-center">
                                                    @lang('crud.common.actions')
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $items = DB::select("SELECT * FROM category3");
                                            @endphp
                                            @forelse ($items as $itemCategory) <tr>
                                                <td>{{ $itemCategory->id  ?? '-' }}</td>
                                                <td>{{ $itemCategory->category_name  ?? '-' }}</td>
                                                <td class="text-center" style="width: 134px;">
                                                    <div role="group" aria-label="Row Actions" class="btn-group">
                                                        @can('update', $itemCategory)
                                                        <a href="">
                                                            <button type="button" class="btn btn-sm btn-light">
                                                                <i class="icon ti-pencil-alt"></i>
                                                            </button>
                                                        </a>
                                                        @endcan @can('view', $itemCategory)
                                                        <a href="">
                                                            <button type="button" class="btn btn-sm btn-light text-success">
                                                                <i class="icon ti-eye"></i>
                                                            </button>
                                                        </a>
                                                        @endcan @can('delete', $itemCategory)
                                                        <form action="" method="POST" onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-light text-danger">
                                                                <i class="icon ti-trash"></i>
                                                            </button>
                                                        </form>
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
                                                <td colspan="4">
                                                    {!! $itemCategories->render() !!}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <h4 class="card-title">
                                <!-- Create new User-->
                                <a><span class="glyphicon glyphicon-edit"></span>
                                    Available units
                                </a>
                                <!--Put Register link-->
                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#addItem" href="">
                                    <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                    Export to PDF
                                </a>
                                <a class="btn btn-sm btn-success ml-4" data-toggle="modal" data-target="#addCategory" href="">
                                    <span class="glyphicon glyphicon-edit"></span> <i class="ti-plus"></i>
                                    Export to excel
                                </a>
                            </h4>
                            <table class="table table-borderless table-hover" id="units">
                                <thead>
                                    <tr>
                                        <th class="text-left">
                                            NO.
                                        </th>
                                        <th class="text-left">
                                            Unit Name
                                        </th>
                                        <th class="text-center">
                                            @lang('crud.common.actions')
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $items = DB::select("SELECT * FROM unit3");
                                    @endphp
                                    @forelse ($items as $itemCategory) <tr>
                                        <td>{{ $itemCategory->id  ?? '-' }}</td>
                                        <td>{{ $itemCategory->unit_name  ?? '-' }}</td>
                                        <td class="text-center" style="width: 134px;">
                                            <div role="group" aria-label="Row Actions" class="btn-group">
                                                @can('update', $itemCategory)
                                                <a href="">
                                                    <button type="button" class="btn btn-sm btn-light">
                                                        <i class="icon ti-pencil-alt"></i>
                                                    </button>
                                                </a>
                                                @endcan @can('view', $itemCategory)
                                                <a href="">
                                                    <button type="button" class="btn btn-sm btn-light text-success">
                                                        <i class="icon ti-eye"></i>
                                                    </button>
                                                </a>
                                                @endcan @can('delete', $itemCategory)
                                                <form action="" method="POST" onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-light text-danger">
                                                        <i class="icon ti-trash"></i>
                                                    </button>
                                                </form>
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
</div>
</div>
</div>

@include('partials.modals.ItemAction.addItem')
@include('partials.modals.CategoryAction.addCategory')
@include('partials.modals.CategoryAction.addUnits')
@include('partials.footer')
</section>
</div>
@endsection
