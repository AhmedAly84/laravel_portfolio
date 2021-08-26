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
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informations as $info)
                        <tr>
                            <th scope="row">{{$info->title}}</th>
                            <td>{{$info->description}}</td>
                            <td>
                                <img src="{{$info->image}}" alt="{{$info->title}}" style="width: 40px; height: 60px">
                            </td>
                            <td>
                                <a href="{{url('homeinfo/edite/'.$info->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('homeinfo/delete/'.$info->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                            </td>
                        @endforeach


                    </tbody>
                    </table>



            </div>
            <div class="col-4">

                <div class="card" >
                    <div class="card-body">
                        <h2 class="card-title">Add Information</h2>

                        <form  action="{{route('home.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">

                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control"  aria-describedby="emailHelp">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                        <textarea name="description"class="form-control" cols="10" rows="3"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                    </div>
            </div>
        </div>
    </div>
            </div>
</div>
</div>
</x-app-layout>
