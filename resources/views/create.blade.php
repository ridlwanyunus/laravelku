@extends('master')

@section('judul', 'Create')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E - Hotel</a>
    </div>
<ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="create">Create</a></li>
      <li><a href="read">Read</a></li>
      <li><a href="update">Update</a></li>
      <li><a href="delete">Delete</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
  <h2>Create Hotel Name</h2>
  <?php echo Form::open(array('action' => 'AppController@insertData', 'method' => 'post', 'class' => 'form-horizontal')); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Id Hotel:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name = "id" id="id" placeholder="Enter id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nama Hotel:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name = "nama" id="nama" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Lokasi Hotel:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name = "lokasi" id="lokasi" placeholder="Enter location">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  <?php echo Form::close(); ?>
</div>
@endsection