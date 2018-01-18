
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Background User', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($Lainnya) && $Lainnya->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img1/'.$Lainnya->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>





<div class="form-group{{ $errors->has('notlp') ? ' has-error' : '' }}">
	{!! Form::label('notlp', 'No Tlp ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('notlp', null, ['class'=>'form-control']) !!}
		{!! $errors->first('notlp', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('line') ? ' has-error' : '' }}">
	{!! Form::label('line', 'Line', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('line', null, ['class'=>'form-control']) !!}
		{!! $errors->first('line', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	{!! Form::label('email', 'Email', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('email', null, ['class'=>'form-control']) !!}
		{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('alamat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
