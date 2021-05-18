@extends('layouts.plantilla')
@section('title')
    <?php echo $curso; ?>
@endsection
@section('content')
    <h1>Bienvenidos al curso de <?php echo $curso; ?> </h1>
@endsection