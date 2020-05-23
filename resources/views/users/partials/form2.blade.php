<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<hr>
<div class="form-group">
	<button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i>
        Save
    </button>
    <a class="btn btn-success" href="{{ route('users.profile',$use->id) }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
</div>