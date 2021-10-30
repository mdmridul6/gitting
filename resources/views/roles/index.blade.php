@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3>Role</h3>
        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success"><i data-feather='plus-square'></i></a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover-animation">
            <thead class="text-center">
                <th>Sl</th>
                <th>Name</th>
                {{-- <th>Permissions</th> --}}
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($role as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-capitalize">{{$item->name}}</td>
                    {{-- <td>
                        @foreach ($item->permissions as $permissions)
                        <span class="badge badge-light-primary mb-1 text-capitalize">{{$permissions->name}}</span>
                        @endforeach
                    </td> --}}
                    <td class="d-flex justify-content-around justify-item-center">
                        <a href="{{ route('admin.role.edit', ['role'=>$item->id]) }}" class="btn btn-primary btn-sm">
                            <i data-feather='edit'></i>
                        </a>

                        <a class="btn btn-danger btn-sm" href="{{ route('admin.role.destroy',['role'=>$item->id]) }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form{{$item->id}}').submit();">
                            <i data-feather='trash'></i>
                        </a>

                        <form id="logout-form{{$item->id}}"
                            action="{{ route('admin.role.destroy',['role'=>$item->id]) }}" method="POST" class="d-none">
                            @method('delete')
                            @csrf
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
