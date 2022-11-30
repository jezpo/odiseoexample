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
        <div class="panel panel-primary" data-sortable-id="ui-widget-1">
            <div class="panel-heading">
                <h4 class="panel-title">RECEPCION DE DOCUMENTOS</h4>
                <div class="panel-heading-btn">
                    <a href="#" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                        <i class="fa fa-expand"></i>
                    </a>
                    ...
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
                                    <select name="data-table-combine_length" aria-controls="data-table-combine" class="custom-select custom-select-sm form-control form-control-sm">
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
                <table id="ejemplo" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>RU</th>
                            <th>CI</th>
                            <th>NOMBRE</th>
                            <th>CARRERA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>

                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>

                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>

                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>

                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>

                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>

                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>

                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>

                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>

                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>

                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>

                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>

                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>

                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>

                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>

                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>

                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>

                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>

                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>

                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>

                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>

                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>

                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>

                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>

                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>

                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>

                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>

                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>

                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>

                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>

                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>

                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>

                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>

                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>

                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>RU</th>
                            <th>CI</th>
                            <th>NOMBRE</th>
                            <th>CARRERA</th>
                    </tfoot>
                </table>
                <!--end table -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Nueva Recepcion</button>
                    <button class="btn btn-primary" type="button" class="col-from-label col-md-5">Imprimir</button>
                    
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Nueva Recepcion</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="modal-content">
                                    <div>
                                        <div class="form-group row">
                                            <div class="col-xs-10">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <label for="inputState" class="col-xs-2 col-form-label">Tipo De Beca:</label>
                                                            
                                                            <select type="select">
                                                                <option selected>Beca Alimentacion</option>
                                                                <option>Beca Internado</option>
                                                            </select>
                                                            <br>
                                                            <label class="col-from-label col-md-3">RU:</label>
                                                            <!-- Botón de éxito -->
                                                            <input type="input" class="input"></input>
                                                            <!-- Botón de información  -->
                                                            <button type="button" class="btn btn-info">Buscar</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="col-from-label col-md-3">CI:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <br>
                                                        <label class="col-from-label col-md-3">RU:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <br>
                                                        <label class="col-from-label col-md-3">PATERNO:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <br>
                                                        <label class="col-from-label col-md-3">MATERNO:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <br>
                                                        <label class="col-from-label col-md-3">NOMBRES:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <br>
                                                        <label class="col-from-label col-md-3">CARRERA:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <div class="col-xs-10"><button type="button" class="btn btn-info">Aceptar Folder</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <br>
                                                        <br>
                                                        <label class="col-from-label col-md-5">OBSERVACION:</label>
                                                        <input type="input" class="input" class="col-xs-10"></input>
                                                        <label class="col-from-label col-md-5">FECHA DE AGENDAMIENTO:</label>
                                                        <input type="datetime-local" id="meeting-time" name="meeting-time" input type="date-time"></input>
                                                            <button type="button"class="btn btn-info">Rechasar</button>
                                                        <br>
                                                        <br>
                                                        
                                                    </div>
                                                </div>
                                            </div> <!-- more inputs -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal to bootom -->
            </div>
            <!--en table -->
            <!-- end panel-body -->
        </div>
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection

@push('scripts')
{{-- Aqui se coloca los JS de assets --}}
@endpush