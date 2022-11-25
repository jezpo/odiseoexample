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
{{--@php
        echo "hola mundo";/// aqui va el cuerpo del formulario
        @endphp
    --}}
    <div class="panel panel-inverse" data-sortable-id="table-basic-1">
						<!-- begin panel-heading -->
						<div class="panel-heading ui-sortable-handle">
							<h4 class="panel-title">Default Table</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<!-- end panel-heading -->
						<!-- begin panel-body -->
						<div class="panel-body">
              <div>
                <h3 >Recepcion De Documentos</h3>
                <h5>UserName - Trabajadora Social - Fecha</h5>
              </div>
							<!-- begin table-responsive -->
							<div class="table-responsive">
								<table class="table m-b-0">
									<thead>
										<tr>
											<th>RU</th>
											<th>Ci</th>
											<th>Nombres</th>
                      <th>Carrera</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Nicky Almera</td>
											<td>nicky@hotmail.com</td>
                      <td>carrera 1</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Edmund Wong</td>
											<td>edmund@yahoo.com</td>
                      <td>carrera 2</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Harvinder Singh</td>
											<td>harvinder@gmail.com</td>
                      <td>carrera 3</td>
										</tr>
									</tbody>
								</table>
							</div>
              <div>
              
              <button type="button" class="btn btn-yellow" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nueva Recepcion</button>
              
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
</div>

              <button type="button" class="btn btn-warning">Imprimir</button>
              </div>
							<!-- end table-responsive -->
						</div>
					</div>
  </div>
</div>
  </div>
</div>


    <!-- end row -->
@endsection

@push('scripts')
    {{-- Aqui se coloca los JS de assets --}}
@endpush
