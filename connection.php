<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<style>
    body
    {
        background-color: grey;
    }
.mydiv
{
    margin: 2px;
    background-color: white;
    height: 200px;
    min-height: 200px;

}
</style>


<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "register";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

echo "<script>alert('Data Stored Successfully')</script>";

    $name = mysqli_real_escape_string($conn,$_POST['Name']);
    $email = mysqli_real_escape_string($conn,$_POST['Email']);
    $phone = mysqli_real_escape_string($conn,$_POST['Mobile'] );
    $gender =  mysqli_real_escape_string($conn,$_POST['gender'] );
    $dob = mysqli_real_escape_string($conn,$_POST['dob'] );
    $school = mysqli_real_escape_string($conn,$_POST['School'] );
    $college = mysqli_real_escape_string($conn,$_POST['College'] );
    $state = mysqli_real_escape_string($conn,$_POST['State'] );
    $address = mysqli_real_escape_string($conn,$_POST['Address'] );
    $resume = mysqli_real_escape_string($conn,$_POST['Resume'] );

    if(isset($_POST['register']))

    {
 
       $query = "insert into reg(name,email,phone,gender,dob,school,college,state,address,resume)values('".$name."','".$email."','".$phone."','".$gender."','".$dob."','".$school."','".$college."','".$state."','".$address."','".$resume."')";

        $res = mysqli_query($conn,$query);

        

     }

?>
<body>


<div class="container" style="padding:120px;">
    <div class="row  align-items-center">
      <div class="col-lg-4 offset-lg-4" style="background-color: #eee">
        <h2>Login In form</h2>
        <form action="/action_page.php" name = "myform">
            <div class="alert alert-danger error-msg" style="display: none">
                  <strong>Danger!</strong> Please filled valid Values
            </div>
              <div class="alert alert-success success-message" style="display: none">
                  <strong>Primary!</strong> Details Successfully Inserted.
              </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                  <div class="form-group">
                    <label for="pwd">Name:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="pswd">
                  </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                      </label>
                    </div>
                  <input type="button" class="btn btn-primary btn-test" name="Submit" value = "Button" />
        </form>
      </div>  
    </div>
</div>


</body>


    <script>
       $(document).ready(function(){

    $('.btn-test').on('click',function(){
        var  val= $('#email').val();
        var va = $('#pwd').val();
        
        if(val == "" || va==""){
            $('.error-msg').css('display', 'block');
            $('.success-message').css('display','none');
        }
        else
        {
            $('.success-message').css('display','block');
            $('.error-msg').css('display', 'none');
        }
        
    });
});  
    </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>