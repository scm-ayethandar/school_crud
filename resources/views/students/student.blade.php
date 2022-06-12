@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <form action="{{ route('student.create') }}" method="get">
        @csrf
        <button class='btn btn-primary'>Create</button>
    </form>
    @if ($students->count()) 
        <table class='table'> 
                <thead>
                  <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Age</th>
                    <th scope='col'>Date</th>
                    <th scope='col'>Actions</th>
                  </tr>
                </thead> 
                <tbody class='table-group-divider'>
                @foreach ($students as $student)
                <tr>
                    <th scope='row'>{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->date }}</td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('student.edit', $student) }}" method="get">
                                <button class='btn btn-outline-success'>Edit</button>
                            </form>
                            <form action="{{ route('student.destroy', $student) }}" class="ms-3" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                  </tr>                     
                @endforeach
                </tbody>
            </table>
                @else
                    <p>There are no students.</p>
                @endif
</div>
@endsection