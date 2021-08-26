<x-app-layout>
    <x-slot name="header">
       <div class="col-md-12 py-4">

        <div class="card" >
            <div class="card-body">
                <h2 class="card-title">Add New Project</h2>

                <form  action="{{route('admin.port.store')}}" method="post" enctype="multipart/form-data">
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

                <label for="exampleInputEmail1">Clinet</label>
                <input type="text" name="clinet" class="form-control"  aria-describedby="emailHelp">
                @error('clinet')
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

                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" id="">
                        @foreach ($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach

                    </select>
                    @error('adress')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" name="date" class="form-control"  aria-describedby="emailHelp">
                    @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>


            </div>
            </div>
    </div>
</x-app-layout>
