@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p class="p-1">{{Session::get('success')}}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if(Session::has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p class="p-1">{{Session::get('danger')}}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
