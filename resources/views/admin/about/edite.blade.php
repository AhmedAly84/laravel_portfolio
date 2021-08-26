<x-app-layout>
    <x-slot name="header">
       <div class="col-md-12 py-4">

        <div class="card" >
            <div class="card-body">
                <h2 class="card-title">Edite About Informations</h2>

                <form  action="{{url('about/update/'.$info->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">

                    <label for="exampleInputEmail1">Title</label>
                    <input type="hidden" name="old_image" value="{{$info->image}}" >
                    <input type="hidden" name="old_sign" value="{{$info->sign_img}}" >
                    <input type="text" name="title" class="form-control" value="{{$info->title}}" aria-describedby="emailHelp">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Short Description</label>
                    <input type="text" name="short_desc" class="form-control" value="{{$info->short_desc}}" aria-describedby="emailHelp">
                    @error('short_desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                <textarea name="description"class="form-control" cols="10" rows="3"> {{$info->description}}</textarea>
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
                <div class="form-group">
                    <label for="exampleInputPassword1">Signeture</label>
                    <input type="file" name="sign_img" value="{{$info->sign_img}}" class="form-control" id="exampleInputPassword1">
                    <div class="form-group mt-3">
                        <img src="{{asset($info->sign_img)}}"  style="width: 300px">
                    </div>
                    @error('sign_img')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone" value="{{$info->phone}}" class="form-control"  aria-describedby="emailHelp">
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Adress</label>
                    <input type="text" name="adress" value="{{$info->adress}}" class="form-control"  aria-describedby="emailHelp">
                    @error('adress')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Birth Day</label>
                    <input type="date" name="birth" value="{{$info->birth}}" class="form-control"  aria-describedby="emailHelp">
                    @error('birth')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>


            </div>
            </div>
    </div>
</x-app-layout>
