
<div class="form-group{{ $errors->has('textkecilhd') ? ' has-error' : '' }}">
	{!! Form::label('textkecilhd', 'Text Kecil Atas', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textkecilhd', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilhd', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('textbesarhd') ? ' has-error' : '' }}">
	{!! Form::label('textbesarhd', 'Text Besar Atas', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textbesarhd', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textbesarhd', '<p class="help-block">:message</p>') !!}
	</div>
</div>






<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($Home) && $Home->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img1/'.$Home->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>







<div class="form-group{{ $errors->has('textkecilboldbd') ? ' has-error' : '' }}">
	{!! Form::label('textkecilboldbd', 'Text Kecil Bold Tengah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textkecilboldbd', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilboldbd', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('textbesarbd') ? ' has-error' : '' }}">
	{!! Form::label('textbesarbd', 'Text Besar Tengah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textbesarbd', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textbesarbd', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('textkecilbd') ? ' has-error' : '' }}">
	{!! Form::label('textkecilbd', 'Text Kecil Tengah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('textkecilbd', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilbd', '<p class="help-block">:message</p>') !!}
	</div>
</div>




<div class="form-group{{ $errors->has('textkecilboldft') ? ' has-error' : '' }}">
	{!! Form::label('textkecilboldft', 'Text Kecil Bold Bawah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textkecilboldft', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilboldft', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('textbesarft') ? ' has-error' : '' }}">
	{!! Form::label('textbesarft', 'Text Besar Bawah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textbesarft', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textbesarft', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('textkecilft') ? ' has-error' : '' }}">
	{!! Form::label('textkecilft', 'Text Kecil Bawah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('textkecilft', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilft', '<p class="help-block">:message</p>') !!}
	</div>
</div>





<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
