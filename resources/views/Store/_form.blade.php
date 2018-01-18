
<div class="form-group{{ $errors->has('textkecilatas') ? ' has-error' : '' }}">
	{!! Form::label('textkecilatas', 'Text Kecil ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textkecilatas', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textkecilatas', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('textbesaratas') ? ' has-error' : '' }}">
	{!! Form::label('textbesaratas', 'Text Besar ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('textbesaratas', null, ['class'=>'form-control']) !!}
		{!! $errors->first('textbesaratas', '<p class="help-block">:message</p>') !!}
	</div>
</div>





<div class="form-group{{ $errors->has('Senin') ? ' has-error' : '' }}">
	{!! Form::label('Senin', 'Senin ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Senin', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Senin', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('Selasa') ? ' has-error' : '' }}">
	{!! Form::label('Selasa', 'Selasa ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Selasa', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Selasa', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('Rabu') ? ' has-error' : '' }}">
	{!! Form::label('Rabu', 'Rabu ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Rabu', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Rabu', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('Kamis') ? ' has-error' : '' }}">
	{!! Form::label('Kamis', 'Kamis ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Kamis', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Kamis', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('Jumat') ? ' has-error' : '' }}">
	{!! Form::label('Jumat', 'Jumat ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Jumat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Jumat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('Sabtu') ? ' has-error' : '' }}">
	{!! Form::label('Sabtu', 'Sabtu ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Sabtu', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Sabtu', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('Minggu') ? ' has-error' : '' }}">
	{!! Form::label('Minggu', 'Minggu ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('Minggu', null, ['class'=>'form-control']) !!}
		{!! $errors->first('Minggu', '<p class="help-block">:message</p>') !!}
	</div>
</div>





<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">

		{!! Form::file('cover') !!}
		@if (isset($Store) && $Store->cover)
		<p>
		    <b>Gambar Saat Ini :</b>
			{!! Html::image(asset('img/img1/'.$Store->cover), null, ['class'=>'img-rounded img-responsive']) !!}
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
