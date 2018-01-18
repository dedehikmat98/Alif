@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				
				<li class="active">Ubah Lainnya</li>
			</ul>
<div class="panel" style="background-color: rgba(255,255,255,0.5);">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah Lainnya</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($Lainnya, ['url' => route('Lainnya.update', $Lainnya->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Lainnya._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection