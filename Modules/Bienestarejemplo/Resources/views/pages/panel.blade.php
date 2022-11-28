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

    <div class="col-xl-12 ui-sortable">
        <div class="panel panel-inverse" style="">
            <!-- begin panel-heading -->
            <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title">DataTable - Extension Combination</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                        data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                        data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                        data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                        data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <div id="data-table-combine_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="dataTables_wrapper dt-bootstrap">
                        <div class="row">
                            <div class="col-xl-7 d-block d-sm-flex d-xl-block justify-content-center">
                                <div class="d-block d-lg-inline-flex mr-0 mr-sm-3">
                                    <div class="dataTables_length" id="data-table-combine_length">
                                        <label>Mostrar <select name="data-table-combine_length"
                                                aria-controls="data-table-combine"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label>
                                    </div>
                                </div>
                                <div class="d-block d-lg-inline-flex">
                                    <div class="dt-buttons btn-group flex-wrap"> <button
                                            class="btn btn-secondary buttons-copy buttons-html5 btn-sm" tabindex="0"
                                            aria-controls="data-table-combine"
                                            type="button"><span>Copiar</span></button> <button
                                            class="btn btn-secondary buttons-csv buttons-html5 btn-sm" tabindex="0"
                                            aria-controls="data-table-combine" type="button"><span>CSV</span></button>
                                        <button class="btn btn-secondary buttons-excel buttons-html5 btn-sm"
                                            tabindex="0" aria-controls="data-table-combine"
                                            type="button"><span>Excel</span></button> <button
                                            class="btn btn-secondary buttons-pdf buttons-html5 btn-sm" tabindex="0"
                                            aria-controls="data-table-combine" type="button"><span>PDF</span></button>
                                        <button class="btn btn-secondary buttons-print btn-sm" tabindex="0"
                                            aria-controls="data-table-combine"
                                            type="button"><span>Imprimir</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 d-flex d-xl-block justify-content-center">
                                <div id="data-table-combine_filter" class="dataTables_filter"><label>Buscar:<input
                                            type="search" class="form-control form-control-sm" placeholder=""
                                            aria-controls="data-table-combine"></label></div>
                            </div>
                        </div>
                        <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text"
                                tabindex="0"></div>
                        <table id="data-table-combine"
                            class="table table-striped table-bordered table-td-valign-middle dataTable no-footer dtr-inline collapsed"
                            role="grid" aria-describedby="data-table-combine_info"
                            style="position: relative; width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th width="1%" class="sorting_asc" tabindex="0" aria-controls="data-table-combine"
                                        rowspan="1" colspan="1" style="width: 0px;" data-column-index="0"
                                        aria-sort="ascending" aria-label=": activate to sort column descending"></th>
                                    <th width="1%" data-orderable="false" class="sorting_disabled" rowspan="1"
                                        colspan="1" style="width: 30px;" data-column-index="1" aria-label=""></th>
                                    <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine"
                                        rowspan="1" colspan="1" style="width: 109px;" data-column-index="2"
                                        aria-label="Rendering engine: activate to sort column ascending">RU.</th>
                                    <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine"
                                        rowspan="1" colspan="1" style="width: 148px;" data-column-index="3"
                                        aria-label="Browser: activate to sort column ascending">CI.</th>
                                    <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine"
                                        rowspan="1" colspan="1" style="width: 133px;" data-column-index="4"
                                        aria-label="Platform(s): activate to sort column ascending">Nombres</th>
                                    <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine"
                                        rowspan="1" colspan="1" style="width: 92px;" data-column-index="5"
                                        aria-label="Engine version: activate to sort column ascending">Carrera</th>
                                    <th class="text-nowrap sorting" tabindex="0" aria-controls="data-table-combine"
                                        rowspan="1" colspan="1" style="width: 66px; display: none;"
                                        data-column-index="6" aria-label="CSS grade: activate to sort column ascending">
                                        CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeX odd" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">1</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td style="display: none;">X</td>
                                </tr>
                                <tr class="gradeC even" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">2</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td style="display: none;">C</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">3</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">4</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">5</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">6</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">7</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">8</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">9</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td width="1%" class="f-s-600 text-inverse sorting_1" tabindex="0">10</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">11</td>
                                    <td class="with-img"><img src="../assets/img/user/user-11.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">12</td>
                                    <td class="with-img"><img src="../assets/img/user/user-12.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">13</td>
                                    <td class="with-img"><img src="../assets/img/user/user-13.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">14</td>
                                    <td class="with-img"><img src="../assets/img/user/user-14.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td>1.7</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">15</td>
                                    <td class="with-img"><img src="../assets/img/user/user-1.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">16</td>
                                    <td class="with-img"><img src="../assets/img/user/user-2.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">17</td>
                                    <td class="with-img"><img src="../assets/img/user/user-3.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.1</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">18</td>
                                    <td class="with-img"><img src="../assets/img/user/user-4.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.2</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA odd" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">19</td>
                                    <td class="with-img"><img src="../assets/img/user/user-5.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.3</td>
                                    <td style="display: none;">A</td>
                                </tr>
                                <tr class="gradeA even" role="row">
                                    <td class="f-s-600 text-inverse sorting_1" tabindex="0">20</td>
                                    <td class="with-img"><img src="../assets/img/user/user-6.jpg"
                                            class="img-rounded height-30"></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1.4</td>
                                    <td style="display: none;">A</td>
                                </tr>


                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="data-table-combine_info" role="status"
                                    aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="data-table-combine_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="data-table-combine_previous">
                                            <a href="#" aria-controls="data-table-combine" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="data-table-combine" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="data-table-combine" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="data-table-combine" data-dt-idx="3" tabindex="0"
                                                class="page-link">3</a>
                                        </li>
                                        <a href="#" aria-controls="data-table-combine" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-yellow" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@getbootstrap" >Nueva Recepcion</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nueva Recepcion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group" class="row justify-content-center justify-content-md-start">
                                        <label style="aling-center">TIPO DE BECA:</label>
                                        <select class="selectpicker" data-live-search="true">
                                            <option data-tokens="ketchup mustard">BECA ALIMENTACION</option>
                                            <option data-tokens="mustard">BECA INTERNADO</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-yellow" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">Nueva Recepcion</button>
                </div>
            </div>
        </div>
        <!-- end panel-body -->

        <!-- end col-10 -->

        <!-- end row -->
        @endsection

        @push('scripts')
        {{-- Aqui se coloca los JS de assets --}}
        @endpush