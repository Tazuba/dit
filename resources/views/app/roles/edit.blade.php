@extends('layouts.userAppbar')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Assign Roles</span></h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ URL::route('home') }}"> Dashboard</a>
                    <a class="breadcrumb-item" href="{{ URL::route('users.create') }}"> Users</a>
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
            
                             <!-- Create new Role-->
                             <a><span class="glyphicon glyphicon-edit"></span>
                                Assign Roles:
                             </a>
                             <a class="btn btn-sm btn-info" href="#" >
                                <span class="glyphicon glyphicon-edit"></span><i class="ti-pencil-alt"></i>
                                Assign Roles
                            </a>
                            <a class="btn btn-sm btn-dark float-right" href="{{ url()->previous() }}" ><span><i class="ti-angle-double-left"></i>
                                Back </span>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-success">
                                <div class="card-body">
                                    <div  style="margin: auto;"  class="col-lg-12">
                                        <x-form
                                            method="PUT"
                                            action="{{ route('roles.update', $role) }}"
                                            class="mt-4"
                                        >
                                            @include('app.roles.form-inputs')
                            
                                            <div class="mt-4">
                                                <a href="{{ route('roles.index') }}" class="btn btn-light">
                                                    <i class="icon ion-md-return-left text-primary"></i>
                                                    @lang('crud.common.back')
                                                </a>                            
                                              
                            
                                                <button type="submit" class="btn btn-sm btn-primary float-right">
                                                    <i class="icon ti-save"></i>
                                                    @lang('crud.common.update')
                                                </button>
                                            </div>
                                        </x-form>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                    </div>   
                </div>
            </div>    
        </div>
        
        @include('partials.footer') 
    </section>
</div>
@endsection