<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Skills Dashboard') }}
    </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- <x-jet-welcome /> --}}
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12">
                    <h2> SKILLS</h2>
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

                            <th scope="col">Name</th>
                            <th scope="col">Presentage</th>

                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                            <tr>

                                <td>{{$skill->name}}</td>
                                <td>{{$skill->presantage}} % </td>

                                <td>
                                    <a href="{{url('skill/edite/'.$skill->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('skill/delete/'.$skill->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                </td>
                            @endforeach


                        </tbody>
                        </table>



                </div>
                <div class="col-4">

                    <div class="card" >
                        <div class="card-body">
                            <h2 class="card-title">Add Skills</h2>

                            <form  action="{{route('skill.add')}}" method="post" >
                                @csrf

                            <div class="form-group">

                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1">Presentage</label>
                                <input type="text" name="presantage" class="form-control"  aria-describedby="emailHelp">
                                @error('presantage')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Add Skill</button>
                            </form>


                        </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col-md-12">
                    <h2>LANGUAGE SKILLS</h2>
                </div>
            </div>
            <div class="row">
                @if ($langs->count()>0)
                <div class="col-8">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Presentage</th>

                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($langs as $skill)
                            <tr>

                                <td>{{$skill->name}}</td>
                                <td>{{$skill->presantage}} % </td>

                                <td>
                                    <a href="{{url('lang/edite/'.$skill->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('lang/delete/'.$skill->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                </td>
                            @endforeach


                        </tbody>
                        </table>



                </div>
                @endif

                <div class="col-4">

                    <div class="card" >
                        <div class="card-body">
                            <h2 class="card-title">Add LANGUAGE</h2>

                            <form  action="{{route('lang.add')}}" method="post" >
                                @csrf

                            <div class="form-group">

                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1">Presentage</label>
                                <input type="text" name="presantage" class="form-control"  aria-describedby="emailHelp">
                                @error('presantage')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Add Skill</button>
                            </form>


                        </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col-md-12">
                    <h2>KNOWLEDGE SKILLS</h2>
                </div>
            </div>
            <div class="row">
                @if ($knows->count()>0)
                <div class="col-8">


                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                            <th scope="col">Name</th>


                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($knows as $skill)
                            <tr>

                                <td>{{$skill->name}}</td>


                                <td>
                                    <a href="{{url('know/edite/'.$skill->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('know/delete/'.$skill->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                </td>
                            @endforeach


                        </tbody>
                        </table>



                </div>
                @endif
                <div class="col-4">

                    <div class="card" >
                        <div class="card-body">
                            <h2 class="card-title">Add KNOWLEDGE</h2>

                            <form  action="{{route('know.add')}}" method="post" >
                                @csrf

                            <div class="form-group">

                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Add Skill</button>
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
