@extends('app')
@section('content')

<div class="container">
    <table class="table table-striped table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="show/{{ $user->id }}">Edit</a>|

                    <a href="delete/{{ $user->id }}" class="btn btn-danger btn-sm" onclick="return myFunction();">Delete</a>

          </tr>

          @endforeach
          <tfoot>
              <tr>
                  <td colspan="2">Number of users : {{ $counts }}</td>
                  <td colspan="2">Min : {{ $min }} Max : {{ $max }} Average : {{  $avg}}</td>

              </tr>
              <tr>
                  <td colspan="4">
                    {{ $users->links() }}
                </td>
              </tr>
          </tfoot>
          </tbody>
      </table>

</div>

@endsection
<script>
    function myFunction() {
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
   </script>
