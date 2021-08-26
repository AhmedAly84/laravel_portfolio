<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Category Dashboard') }}
    </h2>
    </x-slot>
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <h2>All Categories</h2>
        </div>
    </div>
    <div class="row">

        <div class="col-8">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>

                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>


                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr>

                        <td>{{$i++}}</td>
                        <td>{{$category->name}}</td>


                        <td>
                            <a href="{{url('cat/edite/'.$category->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('cat/delete/'.$category->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>
                    @endforeach


                </tbody>
                </table>



        </div>

        <div class="col-4">

            <div class="card" >
                <div class="card-body">
                    <h2 class="card-title">Add Category</h2>

                    <form  action="{{route('cat.add')}}" method="post" >
                        @csrf

                    <div class="form-group">

                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>


                </div>
                </div>
        </div>
    </div>
</div>
</x-app-layout>
