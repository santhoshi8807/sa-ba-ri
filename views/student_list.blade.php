<!DOCTYPE html>
<html>
<head>
    <title>View  Student Records</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        } 
        table, th, td{
            border: 1px solid black;
        }
        th, td{
            paddings: 10px;
            text-align: center;
        }
        th{
            <background-color: id=#f2f2f2;
        }
        a{
            text-decoration: none;
            color: blue;
        }
        a:hover{
            color:red;
        }
    </style>
</head>
<body>
    <h1>List of users</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>    
        @foreach ($students as $student)
        <tr>    
            <td>{{ $student-> id}}</td>
            <td>{{ $student-> name}}</td>    
            <td>{{ $student-> email}}</td>    
            <td><a href="edit/{{ $student->id }}">Edit</a></td>
            <td><a href="delete/{{ $student->id }}">Delete</a></td>
            

        </tr>        
        @endforeach
    </table>
</body>
</html>        