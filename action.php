<?php

$username = 'root';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=crud', $username, $password ); 

if(isset($_POST["action"])) 
{

 if($_POST["action"] == "Load") 
 {
  $statement = $connection->prepare("SELECT * FROM customers ORDER BY id DESC");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
   <table class="table table-bordered">
    <tr>
     <th width="20%">First Name</th>
     <th width="20%">Last Name</th>
     <th width="20%">Enail</th>
     <th width="20%">Phone</th>
     <th width="10%">Update</th>
     <th width="10%">Delete</th>
    </tr>
  ';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
    <tr>
     <td>'.$row["first_name"].'</td>
     <td>'.$row["last_name"].'</td>
     <td>'.$row["email"].'</td>
     <td>'.$row["phone"].'</td>
     <td><button type="button" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button></td>
     <td><button type="button" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }


 if($_POST["action"] == "Create")
 {
  $statement = $connection->prepare("
   INSERT INTO customers (first_name, last_name, email, phone) 
   VALUES (:first_name, :last_name, :email, :phone)
  ");
  $result = $statement->execute(
   array(
    ':first_name' => $_POST["firstName"],
    ':last_name' => $_POST["lastName"],
    ':email' => $_POST["email"],
    ':phone' => $_POST["phone"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }

 if($_POST["action"] == "Select")
 {
  $output = array();
  $statement = $connection->prepare(
   "SELECT * FROM customers 
   WHERE id = '".$_POST["id"]."' 
   LIMIT 1"
  );
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output["first_name"] = $row["first_name"];
   $output["last_name"] = $row["last_name"];
   $output["email"] = $row["email"];
   $output["phone"] = $row["phone"];
  }
  echo json_encode($output);
 }

 if($_POST["action"] == "Update")
 {
  $statement = $connection->prepare(
   "UPDATE customers 
   SET first_name = :first_name, last_name = :last_name, email =:email, phone =:phone 
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':first_name' => $_POST["firstName"],
    ':last_name' => $_POST["lastName"],
    ':email' => $_POST["email"],
    ':phone' => $_POST["phone"],
    ':id'   => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }

 if($_POST["action"] == "Delete")
 {
  $statement = $connection->prepare(
   "DELETE FROM customers WHERE id = :id"
  );
  $result = $statement->execute(
   array(
    ':id' => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Deleted';
  }
 }

}

?>