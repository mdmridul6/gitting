@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Users Edit</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.user.update',['user'=>$user->id]) }}" method="POST">
            @method('put')
            @csrf
            <div class="row g-3 mb-2">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                </div>
            </div>
            <div class="row g-3 mb-2">
                <div class="col">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="col">
                    <label for="confirm">Conform Password</label>
                    <input type="text" class="form-control" name="confirm" placeholder="Confirm Password">
                </div>
            </div>
            <div class="row g-3 mb-2">
                <div class="col-6">
                    <label for="select2">Assign Roles</label>
                    <select name="roles[]" id="select2" class="select2" multiple>
                        @foreach ($roles as $role)
                        <option value="{{$role->name}}" {{$user->hasRole($role->name) ? 'selected' :
                            ''}}>{{$role->name}}
                        </option>
                        @endforeach
                    </select>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection

@section('script')
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>

<script>
    $("#select2").select2({
        theme: "classic",
        width: 'resolve'
    });

</script>

@endsection
