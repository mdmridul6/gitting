@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        <h3>Roles Upadte</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.role.update', $role->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mb-1">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" id="name" value="{{ $role->name }}" name="name"
                    placeholder="Enter a Role Name">
            </div>

            <div class="form-group mb-1">
                <div class="form-check form-check-inline my-1">
                    <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1" {{
                        App\Models\User::roleHasPermissions($role, $all_permissions) ? 'checked' : '' }}>
                    <label class="form-check-label text-capitalize" for="checkPermissionAll">All</label>
                </div>
                <hr>
                @php $i = 1; @endphp
                @foreach ($permission_groups as $group)
                <div class="row">
                    @php
                    $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                    $j = 1;
                    @endphp

                    <div class="col-3">
                        <div class="form-check form-check-inline my-1">
                            <input type="checkbox" class="form-check-input" id="{{ $i }}Management"
                                value="{{ $group->name }}"
                                onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)" {{
                                App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                            <label class="form-check-label text-capitalize" for="{{ $i }}Management">{{ $group->name
                                }}</label>
                        </div>
                    </div>

                    <div class="col-9 role-{{ $i }}-management-checkbox">

                        @foreach ($permissions as $permission)
                        <div class="form-check form-check-inline my-1">
                            <input type="checkbox" class="form-check-input"
                                onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})"
                                name="permissions[]" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                            id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                            <label class="form-check-label text-capitalize"
                                for="checkPermission{{ $permission->id }}">{{
                                $permission->name }}</label>
                        </div>
                        @php $j++; @endphp
                        @endforeach
                        <br>
                    </div>

                </div>
                @php $i++; @endphp
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Role</button>
        </form>
    </div>
</div>

@section('script')
@include('includes.roleScript')
@endsection
@endsection
