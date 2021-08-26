<x-app-layout>
    <x-slot name="header">
       <div class="col-md-12 py-4">

        <div class="card" >
            <div class="card-body">
                <h2 class="card-title">Add About Informations</h2>

                <form  action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">

                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control"  aria-describedby="emailHelp">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Short Description</label>
                    <input type="text" name="short_desc" class="form-control"  aria-describedby="emailHelp">
                    @error('short_desc')
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
                <div class="form-group">
                    <label for="exampleInputPassword1">Signeture</label>
                    <input type="file" name="sign_img" class="form-control" id="exampleInputPassword1">
                    @error('sign_img')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone" class="form-control"  aria-describedby="emailHelp">
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Adress</label>
                    <input type="text" name="adress" class="form-control"  aria-describedby="emailHelp">
                    @error('adress')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Birth Day</label>
                    <input type="date" name="birth" class="form-control"  aria-describedby="emailHelp">
                    @error('birth')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
            </div>
    </div>
</x-app-layout>
