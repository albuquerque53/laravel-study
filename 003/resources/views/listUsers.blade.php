<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Users</title>

  </head>


  <body>

    <blockquote class="blockquote text-center">
        <h1>Users Table </h1>
    </blockquote>

    <div class="container">
    
    <!-- Table for show * Users in the table -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Run array $users to catch users -->
            @foreach($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  
                  <!-- Show User -->
                  <a href="{{ route('users.list', ['user' => $user->id]) }}" class="btn btn-primary active" role="button" aria-pressed="true">Show</a>
                  <!-- Edit User -->
                  <a href="{{ route('users.editor', ['user' => $user->id]) }}" class="btn btn-info active" role="button" aria-pressed="true">Edit</a>

                  <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                    
                    @csrf
                    @method('delete')
                    
                    <input type="hidden" name="user" value="{{ $user->id }}">
                    <!-- Delete User -->
                    <button type="submit" class="btn btn-danger">Delete</button>

                  </form>

                </div>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>

        <!-- Add User -->
        <a href="{{ route('users.add') }}" class="btn btn-primary active" role="button" aria-pressed="true">Add User</a>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
  

</html>