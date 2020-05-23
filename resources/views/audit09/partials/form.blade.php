<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => 'required']) }}
</div>
<div class="form-group">
	{{ Form::label('surname', 'Surname') }}
	{{ Form::text('surname', null, ['class' => 'form-control', 'id' => 'surname', 'required' => 'required']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i>
        Save
    </button>
    <a class="btn btn-success" href="{{ route('audit09.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
</div>