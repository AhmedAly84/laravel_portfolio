<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Admin Dashboard') }}
    </h2>
    </x-slot>
<div class="container py-4">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="row">
        <div class="col-12">

            <div class="card" >
                <div class="card-body">
                    <h2 class="card-title">Edite Information</h2>

                    <form  action="{{url('homeinfo/update/'.$info->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <input type="hidden" name="old_image" value="{{$info->image}}" >
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" value="{{$info->title}}" class="form-control"  aria-describedby="emailHelp">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                    <textarea name="description"class="form-control" cols="10" rows="3">{{$info->description}}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="image" value="{{$info->image}}" class="form-control" id="exampleInputPassword1">

                        <div class="form-group mt-3">
                            <img src="{{asset($info->image)}}"  style="width: 300px">
                        </div>

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
</x-app-layout>
