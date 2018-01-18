@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/Product') }}">Product</a></li>
				<li class="active">Tambah Product</li>
			</ul>
<div class="panel" style="background-color: rgba(255,255,255,0.5);">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Product</h2>
				</div>
				<div class="panel-body">
				{!! Form::open(['url' => route('Product.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Product._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection