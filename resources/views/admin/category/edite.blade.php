<x-app-layout>
    <x-slot name="header">
       <div class="col-md-12 py-4">

        <div class="card" >
            <div class="card-body">
                <h2 class="card-title">Edite Category</h2>

                <form  action="{{url('cat/update/'.$cat->id)}}" method="post" >
                    @csrf
                <div class="form-group">

                    <label for="exampleInputEmail1">Name</label>


                    <input type="text" name="name" class="form-control" value="{{$cat->name}}" aria-describedby="emailHelp">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>




                <button type="submit" class="btn btn-primary">Update</button>
                </form>


            </div>
            </div>
    </div>
</x-app-layout>
