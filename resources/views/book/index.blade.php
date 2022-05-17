@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Books List</h1>
@stop

@section('content')
   <a href="books/create" class="btn btn-primary mb-3">CREAR</a>

<table id="books" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Titel</th>
            <th scope="col">ISBN</th>
            <th scope="col">Total_copies</th>
            <th scope="col">Available_copies</th>
            <th scope="col">Preis</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->Titel}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->Total_copies}}</td>
            <td>{{$book->Available_copies}}</td>
            <td>{{$book->Preis}}</td>
            <td>
                <form action="{{ route ('books.destroy',$book->id)}}" method="POST">
                <a href="/books/{{ $book->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop