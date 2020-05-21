<div class="form-group">
	{{ Form::label('name', 'Tag name') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => 'required']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Friendly URL') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required' => 'required']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Description') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Special permission</h3>
<div class="form-group">
 	<label>{{ Form::radio('special', 'all-access') }} Total Access</label>
 	<label>{{ Form::radio('special', 'no-access') }} No access</label>
</div>
<hr>
<h3>Permission list</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
	    <li>
	        <label>
	        {{ Form::checkbox('permissions[]', $permission->id, null) }}
	        {{ $permission->name }}
	        <em>({{ $permission->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i>
        Save
    </button>
    <a class="btn btn-success" href="{{ route('roles.index') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
</div>