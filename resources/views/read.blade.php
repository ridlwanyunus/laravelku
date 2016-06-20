@extends('master')

@section('judul', 'Read')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E - Hotel</a>
    </div>
<ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="create">Create</a></li>
      <li class="active"><a href="read">Read</a></li>
      <li><a href="update">Update</a></li>
      <li><a href="delete">Delete</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<?php
foreach ($datas as $data) {
  echo "<pre><b>" . $data->id_hotel . " - " .$data->nama_hotel . " - " . $data->lokasi_hotel . "</pre>";
}
?>
@endsection