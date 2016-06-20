@extends('master')

@section('judul', 'Home')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E - Hotel</a>
    </div>
<ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li><a href="create">Create</a></li>
      <li><a href="read">Read</a></li>
      <li><a href="update">Update</a></li>
      <li><a href="delete">Delete</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="alert alert-success">
<?php
if(DB::connection()->getDatabaseName())
   {
     echo "connected sucessfully to database ".DB::connection()->getDatabaseName();
   }

?>
</div>

@endsection