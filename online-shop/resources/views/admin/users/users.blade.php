@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-success">Users</a>
                <table class="table table-bordered table-striped text-center ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined_At</th>
                            <th>Customer</th>
                            <th>Admin</th>
                            <th>Subscribed to NewsLetter</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user['id'] }} </td>
                                <td>{{ $user['name'] }} </td>
                                <td>{{ $user['email'] }} </td>
                                <td>{{ $user['created_at'] }} </td>
                                <td>{{ $user['is_admin'] ? 'no' : 'yes' }} </td>
                                <td>{{ $user['is_admin'] ? 'yes' : 'no' }} </td>
                                <td>{{ $user['newsletter'] ? 'yes' : 'no' }} </td>



                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- {!! $categories->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
