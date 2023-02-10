@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-success">Orders</a>
                <table class="table table-bordered table-striped text-center ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>User_id</th>
                            <th>First_name</th>
                            <th>Last_name</th>
                            <th>Email</th>
                            <th>Mobile_number</th>
                            <th>Address_line1</th>
                            <th>Address_line1</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip_code</th>
                            <th>Made_at</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td> {{ $order['id'] }} </td>
                                <td>{{ $order['user_id'] }} </td>
                                <td>{{ $order['first_name'] }} </td>
                                <td>{{ $order['last_name'] }} </td>
                                <td>{{ $order['email'] }} </td>
                                <td>{{ $order['mobile_number'] }} </td>
                                <td>{{ $order['address_line1'] }} </td>
                                <td>{{ $order['address_line1'] }} </td>
                                <td>{{ $order['country'] }} </td>
                                <td>{{ $order['city'] }} </td>
                                <td>{{ $order['state'] }} </td>
                                <td>{{ $order['zip_code'] }} </td>
                                <td>{{ $order['created_at'] }} </td>



                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- {!! $categories->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
