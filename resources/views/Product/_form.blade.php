<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($Product) && $Product->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img7/'.$Product->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('nama_product') ? ' has-error' : '' }}">
	{!! Form::label('nama_product', 'Nama Product', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('nama_product', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_product', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('bahan') ? ' has-error' : '' }}">
	{!! Form::label('bahan', 'Bahan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('bahan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('bahan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('warna') ? ' has-error' : '' }}">
	{!! Form::label('warna', 'Warna', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('warna', null, ['class'=>'form-control']) !!}
		{!! $errors->first('warna', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }}">
	{!! Form::label('ukuran', 'Ukuran', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('ukuran', null, ['class'=>'form-control']) !!}
		{!! $errors->first('ukuran', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>