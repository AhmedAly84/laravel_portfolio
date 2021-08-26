<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __(' Portfolio Dashboard') }}
    </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- <x-jet-welcome /> --}}
        <div class="container py-4">
            <div class="row">
                <div class="col-md-8">
                    <h3>All Projects </h3>
                </div>
                <div class="col-md-4">
                    <a href="{{route('port.add')}}" class="btn btn-primary">Add New</a>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
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
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Clinet</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $info)
                            <tr>
                                <th scope="row">{{$info->title}}</th>
                                <th scope="row">{{$info->description}}</th>
                                <td>{{$info->category->name}}</td>

                                <td>
                                    <img src="{{asset($info->image)}}"  style="width: 40px; height: 60px">
                                </td>

                                <td>{{$info->clinet}}</td>
                                <td>{{$info->date}}</td>
                                <td>
                                    <a href="{{url('port/edite/'.$info->id)}}" class="btn btn-primary">Edit</a>

                                    <a href="{{url('port/delete/'.$info->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                </td>
                            @endforeach


                        </tbody>
                        </table>



                </div>

            </div>
        </div>
                </div>
    </div>
    </div>
    </x-app-layout>
