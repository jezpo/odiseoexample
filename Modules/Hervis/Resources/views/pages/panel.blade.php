@extends('layouts.default')

@section('title', config('bienestarejemplo.name').' :: '.'panel')

@push('css')
{{-- Aqui se coloca los CSS de assets --}}
@endpush

@section('header-nav')

@endsection

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
    <li class="breadcrumb-item active">Form Elements</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Form Elements <small>header small text goes here...</small></h1>
<!-- end page-header -->
<!-- begin row -->
<div class="row">
    <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer col-xl-12">
        <div class="col-xl-12 ui-sortable">
            <div class="panel panel-primary" data-sortable-id="ui-widget-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Gstion de Correspondencia</h4>
                    <div class="panel-heading-btn">
                        <a href="#" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                            <i class="fa fa-expand"></i>
                        </a>

                    </div>
                </div>
                <div class="panel-body">
                    <div>
                        <h2 class="text-center">Recepcion de Documentos</h2>
                        <h3>Username Trabajo Social datetime</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 d-block d-sm-flex d-xl-block justify-content-center">
                            <div class="d-block d-lg-inline-flex mr-0 mr-sm-3">
                                <div class="dataTables_length" id="data-table-combine_length">
                                    <label> Show
                                        <select name="data-table-combine_length" aria-controls="data-table-combine"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="d-block d-lg-inline-flex">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <button class="btn btn-secondary buttons-copy buttons-html5 btn-sm" tabindex="0"
                                        aria-controls="data-table-combine" type="button">
                                        <span>Copiar</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-csv buttons-html5 btn-sm" tabindex="0"
                                        aria-controls="data-table-combine" type="button">
                                        <span>CSV</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-excel buttons-html5 btn-sm" tabindex="0"
                                        aria-controls="data-table-combine" type="button">
                                        <span>Excel</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-pdf buttons-html5 btn-sm" tabindex="0"
                                        aria-controls="data-table-combine" type="button">
                                        <span>PDF</span>
                                    </button>
                                    <button class="btn btn-secondary buttons-print btn-sm" tabindex="0"
                                        aria-controls="data-table-combine" type="button">
                                        <span>Imprimir</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 d-flex d-xl-block justify-content-center">
                            <div id="data-table-combine_filter" class="dataTables_filter">
                                <label>Buscar:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table-combine">
                                </label>
                            </div>
                        </div>
                    </div>
                    
                <!--en table -->
                <!-- end panel-body -->
            </div>
        </div>
        <!-- end col-10 -->
    </div>
</div>
<!-- end row -->
@endsection

@push('scripts')
{{-- Aqui se coloca los JS de assets --}}
@endpush