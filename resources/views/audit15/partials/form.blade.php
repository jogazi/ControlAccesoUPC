<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => 'required']) }}
</div>
<div class="form-group">
	{{ Form::label('quality', 'Quality') }}
	{{ Form::text('quality', null, ['class' => 'form-control', 'id' => 'quality', 'required' => 'required']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i>
        Save
    </button>
    <a class="btn btn-success" href="{{ route('audit15.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
</div>