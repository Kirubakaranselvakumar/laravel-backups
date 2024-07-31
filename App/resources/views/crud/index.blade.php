@extends('crud.default')
@section('main-content')
<div class="card-header">
    <form action="{{ url('/') }}" method="GET">
        <div class="input-group mb-3">
            {{-- <a href="{{url('/')}}" class="btn btn-danger float-end"><i class="bi bi-arrow-left"></i> </a> --}}
            <input type="text" name="search"  class="form-control me-2" placeholder="Search...">
            <button type="submit" class="btn btn-success"><i class="bi bi-search"></i> &nbsp; Search</button>
        </div>
</form></div>
<div class="card-body">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th><a href="{{ route('index', ['sort' => 'name', 'sort_order' => ($sort === 'name' && $sortOrder === 'asc') ? 'desc' : 'asc', 'search' => $search, 'page' => $tables->currentPage()]) }}" style="text-decoration:none;  color:black;"><i class="bi bi-filter"></i>&nbsp;Name</a></th>

                {{-- <th scope="col">Name</th> --}}
                <th scope="col">Age</th>
                <th><a href="{{ route('index', ['sort' => 'email', 'sort_order' => ($sort === 'email' && $sortOrder === 'asc') ? 'desc' : 'asc', 'search' => $search, 'page' => $tables->currentPage()]) }}" style="text-decoration:none;  color:black;"><i class="bi bi-filter"></i>&nbsp;Email</a></th>
                {{-- <th scope="col">Email</th> --}}
                <th scope="col">Mobile</th>
                <th scope="col">Image</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $crud)
                <tr>
                    <td>{{ $crud->id }}</td>
                    <td>{{ $crud->name }}</td>
                    <td>{{ $crud->age }}</td>
                    <td>{{ $crud->email }}</td>
                    <td>{{ $crud->phone }}</td>
                    <td> <img src="{{asset('uploads/students/'.$crud->image)}}" class="image" alt="image"/></td>
                    <td>
                        <a href="{{ url('edit/'.$crud->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ url('delete/' . $crud->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    &nbsp; &nbsp;
    {{ $tables->appends(request()->except('page'))->links() }}
</div>
@endsection
