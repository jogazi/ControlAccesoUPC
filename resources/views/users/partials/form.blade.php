<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<hr>
<h3>Role list</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description }})</em>
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