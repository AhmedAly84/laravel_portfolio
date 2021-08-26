<x-app-layout>
    <x-slot name="header">
       <div class="col-md-12 py-4">

        <div class="card" >
            <div class="card-body">
                <h2 class="card-title">Edite Language Skills</h2>

                <form  action="{{url('lang/update/'.$skill->id)}}" method="post" >
                    @csrf
                <div class="form-group">

                    <label for="exampleInputEmail1">Name</label>


                    <input type="text" name="name" class="form-control" value="{{$skill->name}}" aria-describedby="emailHelp">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">

                    <label for="exampleInputEmail1">Presantage</label>


                    <input type="text" name="presantage" class="form-control" value="{{$skill->presantage}}" aria-describedby="emailHelp">
                    @error('presantage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
                </form>


            </div>
            </div>
    </div>
</x-app-layout>
