<!DOCTYPE html>
<html>

<head>
    <title>Registro de Niños</title>
</head>

<body>
    <h3>Ver la lista de los niños</h3>
    <a href= "{{ url('childish') }}">Volver al listado</a>

    <h1>Ingrese los datos del niño.</h1>
    <form action= "{{ url('store') }}" method= "POST">
    @csrf
    <lavel for= "name">Nombre</lavel>                <input type= text name=name id= mane>
    <lavel for= "last_name">Apellido</lavel>         <input type= text name= last_name id= last_mane>
    <lavel for= "age">Edad</lavel>                   <input type= numeric name= age id= age>
    <lavel for= "school_grade">Grado escolar</lavel> <input type= text name= school_grade id= school_grade>
    <lavel for= "mother">Madre</lavel>               <input type= text name= mother id= mother>
    <lavel for= "father">Padre</lavel>               <input type= text name= father id= father>
    
    <button type= "summit">Almacenar los datos</button>
</body>

</html>