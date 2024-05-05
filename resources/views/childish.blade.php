<!DOCTYPE html>
<html>
<head>
    <title>Ministerio infantil</title>
</head>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f4f4f4;
    }
    h1 {
    color: #333;
    }
    .table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    }
    .table th, .table td {
    padding: 7px;
    border: 1px solid #ddd;
    text-align: left;
    }
    .table th {
    background-color: #4CAF50;
    color: white;
    }
    .table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
    margin-bottom: 5px;
    }
    .table tbody tr:hover {
    background-color: #f1f1f1;
    }
    </style>

<body>
        
    <title>Ministerio Infantil</title>
    <h1>¡BIENVENIDOS!<br>
        Estos son los niños con los que estamos trabajando en nuestra comunidad.</h1>
    <a href= "{{ url('register') }}">Registrar nuevo niño/a</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Grado Escolar</th>
                <th>Nombre de la madre</th>
                <th>Nombre del padre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($children as $child)
            <tr>
                <td>{{$child->name}}</td>
                <td>{{$child->last_name}}</td>
                <td>{{$child->age}}</td>
                <td>{{$child->school_grade}}</td>
                <td>{{$child->mother}}</td>
                <td>{{$child->father}}</td>
                <td>
                    <a href= "{{ url('viewupdate/' .$child->id)}}">Actualizar Registro</a>
                    <form action= "{{url('delete/' .$child->id)}}" method= "POST">
                        @csrf
                        @method('DELETE')
                        <button type= "submit">Eliminar Rregistro</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>