@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3>Users</h3>
        <a href="{{ route('admin.user.create') }}" class="btn btn-sm btn-success"><i data-feather='plus-square'></i></a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover-animation">
            <thead class="text-center">
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-capitalize">{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        @foreach ($item->roles as $roles)
                        <span class="badge badge-light-primary mb-1 text-capitalize">{{$roles->name}}</span>
                        @endforeach
                    </td>
                    <td class="d-flex justify-content-around justify-item-center">
                        <a href="{{ route('admin.user.edit', ['user'=>$item->id]) }}" class="btn btn-primary btn-sm">
                            <i data-feather='edit'></i>
                        </a>

                        <a class="btn btn-danger btn-sm" href="{{ route('admin.user.destroy',['user'=>$item->id]) }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form{{$item->id}}').submit();">
                            <i data-feather='trash'></i>
                        </a>

                        <form id="logout-form{{$item->id}}"
                            action="{{ route('admin.user.destroy',['user'=>$item->id]) }}" method="POST" class="d-none">
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
