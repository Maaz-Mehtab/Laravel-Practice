<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello View</title>
</head>
<body>
        <h1>Hello View php First Page In Laravel</h1>
    
</body>
</html> -->




@extends('layout/master')
    
    @section('body')
    <h1>Hello View php First Page In Laravel</h1>

    {{$mysub[0]}}
    @endsection 