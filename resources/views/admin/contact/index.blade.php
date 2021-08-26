<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Contact Dashboard') }}
    </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- <x-jet-welcome /> --}}
        <div class="container py-4">
            <div class="row">
                <div class="col-md-8">
                    <h3>All Messages </h3>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>

                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $info)
                            <tr>
                                <th scope="row">{{$info->name}}</th>
                                <td>{{$info->email}}</td>
                                <td>{{$info->message}}</td>

                                <td>

                                    <a href="{{url('message/delete/'.$info->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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
