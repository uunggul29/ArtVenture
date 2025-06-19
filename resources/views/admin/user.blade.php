<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: black;
        }

        label {
            display: inline-block;
            width: 250px;
            font-size: 18px;
            color: white;
        }

        input[type='text'] {
            width: 350px;
            height: 50px;
        }

        textarea {
            width: 450px;
            height: 80px;
        }

        .input_deg {
            padding: 15px;
        }

        .table_deg {
            border: 2px solid greenyellow;
        }

        thead {
            background-color: #0a6ba8;
            text-align: center;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        tbody {
            background-color: #2498E0;
            border: 1px solid skyblue;
            color: white;
        }
    </style>
    @include('admin.css')
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="text-center mb-4">Data User</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <!-- <th scope="col">Type</th> -->
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row">
                                    <center>{{ $loop->iteration }}</center>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <!-- <td>
                                <center>{{ $user->usertype }}</center>
                            </td> -->
                                {{--
                            <td>
                                <center>
                                    <form action="{{ route('delete_user', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </center>
                            </td>
                            --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('home.js')
</body>

</html>
