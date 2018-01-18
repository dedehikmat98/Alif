@extends('layouts.app')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="active">About</li>
				</ul>
				<div class="panel" style="background-color: rgba(255,255,255,0.5);">
					<div class="panel-heading">
						<h2 class="panel-title">About</h2>
					</div>

					<div class="panel-body">
							{{-- <p> <a class="btn btn-primary" href="About/edit">Edit</a> </p> --}}
							{!! $html->table(['class'=>'table-striped']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection