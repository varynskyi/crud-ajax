<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TASK CRUD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
 </head>
 <body>
  <div class="container box">
   <h1 align="center">TASK CRUD APP</h1>
   <br />
   <div align="right">
    <button type="button" id="modal_button" class="btn btn-info">Create New User</button>
   </div>
   <br />
   <div id="result" class="table-responsive">

   </div>
  </div>
 </body>
</html>

<div id="customerModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Create New Records</h4>
   </div>
   <div class="modal-body">
    <label>Enter First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <br />
    <label>Enter Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control" />
    <br />
    <label>Enter EMAIL</label>
    <input type="text" name="email" id="email" class="form-control" />
    <br />
    <label>Enter Phone</label>
    <input type="text" name="phone" id="phone" class="form-control" />
    <br />
   </div>
   <div class="modal-footer">
    <input type="hidden" name="customer_id" id="customer_id" />
    <input type="submit" name="action" id="action" class="btn btn-success" />
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<script src="main.js"></script>
</body>

</html>