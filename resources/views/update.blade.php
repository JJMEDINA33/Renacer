<!DOCTYPE html>
<html>

<head>
    <title>Actualizar Registro de Niños</title>
</head>

<body>
    <h3>Ver la lista de los niños</h3>
    <a href= "{{ url('childish') }}">Volver al listado</a>

    <h1>Ingrese los datos a actualizar.</h1>
    <form action= "{{ url('update/' .$child->id) }}" method= "POST">
    @csrf
    @method ('PUT')
    <lavel for= "name">Nombre</lavel>                <input type= text name=name id= mane value= "{{$child->name}}">
    <lavel for= "last_name">Apellido</lavel>         <input type= text name= last_name id= last_mane value= "{{$child->last_name}}">
    <lavel for= "age">Edad</lavel>                   <input type= numeric name= age id= age value= "{{$child->age}}">
    <lavel for= "school_grade">Grado escolar</lavel> <input type= text name= school_grade id= school_grade value= "{{$child->school_grade}}">
    <lavel for= "mother">Madre</lavel>               <input type= text name= mother id= mother value= "{{$child->mother}}">
    <lavel for= "father">Padre</lavel>               <input type= text name= father id= father value= "{{$child->father}}">
    
    <button type= "summit">Actualizar los datos</button>
</body>

</html>