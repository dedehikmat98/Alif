
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($About) && $About->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img1/'.$About->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>



<div class="form-group{{ $errors->has('textkecilbold') ? ' has-error' : '' }}">
	{!! Form::label('textkecilbold', 'Text Kecil ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textkecilbold', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilbold', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('textbesar') ? ' has-error' : '' }}">
	{!! Form::label('textbesar', 'Text Besar', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textbesar', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textbesar', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group{{ $errors->has('textkecil') ? ' has-error' : '' }}">
	{!! Form::label('textkecil', 'Text Kecil Bold Tengah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('textkecil', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecil', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
