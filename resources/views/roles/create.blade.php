@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Roles Create</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.role.store') }}" method="POST">
            @csrf
            <div class="form-group mb-1">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Role Name">
            </div>

            <div class="form-group">
                <label for="name">Permissions</label>

                <div class="form-check form-check-inline my-1">
                    <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                    <label class="form-check-label text-capitalize" for="checkPermissionAll">All</label>
                </div>
                <hr>
                @php $i = 1; @endphp
                @foreach ($permission_groups as $group)
                <div class="row">
                    <div class="col-3">
                        <div class="form-check form-check-inline my-1">
                            <input type="checkbox" class="form-check-input" id="{{ $i }}Management"
                                value="{{ $group->name }}"
                                onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                            <label class="form-check-label text-capitalize" for="{{ $i }}Management">{{ $group->name
                                }}</label>
                        </div>
                    </div>

                    <div class="col-9 role-{{ $i }}-management-checkbox">
                        @php
                        $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                        $j = 1;
                        @endphp
                        @foreach ($permissions as $permission)
                        <div class="form-check form-check-inline my-1">
                            <input type="checkbox" class="form-check-input" name="permissions[]"
                                id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                            <label class="form-check-label text-capitalize"
                                for="checkPermission{{ $permission->id }}">{{
                                $permission->name }}</label>
                        </div>
                        @php $j++; @endphp
                        @endforeach
                        <br>
                    </div>
                    <hr>
                </div>
                @php $i++; @endphp
                @endforeach


            </div>


            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Role</button>
        </form>
    </div>
</div>

@section('script')
@include('includes.roleScript')
@endsection


@endsection
