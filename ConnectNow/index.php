<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ChatRoom</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
 
  <div class="wrapper">
    <section class="form signup">
      <header> Realtime Chat Room </header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt">There is a error!</div>
          <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name"  required>
          </div>

          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name"  required>
          </div>
</div>          

          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Email"  required>
          </div>

          <div class="field input ">
            <label>Password</label>
            <input type="text" name="password" placeholder="Enter Password"  required>
            <i class="fa fa-eye"></i>
          </div>

          <div class="field image">
            <label>Profile Photo</label>
            <input type="file" name="image"  required>
          </div>
          
          <div class="field button">
            <input type="submit" value="Continue to Chat">
          </div>

        </form>
<div class="link">Already signed up? <a href="#">Login Now</a></div>
       
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>