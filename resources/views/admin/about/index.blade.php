<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Admin Dashboard') }}
    </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- <x-jet-welcome /> --}}
        <div class="container py-4">
            <div class="row">
                <div class="col-md-8">
                    <h3>About Informations </h3>
                </div>
                <div class="col-md-4">
                    <a href="{{url('about/add')}}" class="btn btn-primary">Add New</a>

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
                            <th scope="col">Short Description</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Signature</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Email</th>
                            <th scope="col">Birth Day</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($informations as $info)
                            <tr>
                                <th scope="row">{{$info->title}}</th>
                                <td>{{$info->short_desc}}</td>
                                <td>{{$info->description}}</td>
                                <td>
                                    <img src="{{asset($info->image)}}"  style="width: 40px; height: 60px">
                                </td>
                                <td>
                                    <img src="{{asset($info->sign_img)}}"  style="width: 40px; height: 60px">
                                </td>
                                <td>{{$info->phone}}</td>
                                <td>{{$info->adress}}</td>
                                <td>{{$info->email}}</td>
                                <td>{{$info->birth}}</td>
                                <td>
                                    <a href="{{url('about/edite/'.$info->id)}}" class="btn btn-primary">Edit</a>

                                    <a href="{{url('about/delete/'.$info->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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
