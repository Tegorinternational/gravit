<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Sign up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    label{
      color: #929292;
    }
  </style>
</head>

<body>
  
  <section class="mt-5">
    <div class="container mx-auto px-4 py-5 overflow-hidden">
      <div class="mx-auto pb-0">
        <h1 class="text-2xl fw-bold text-start text-capitalize">Sign In</h1>
        <p>Create a new account to log in</p>
      </div>
      <div class="row">
         
         <form class="row g-3" action="signup_php.php" method="POST">
           
           <div class="col-md-6">
             <div class="mb-3">
               <label for="name" class="form-label">Name:</label>
               <input required class="form-control" id="name" type="text" name="name" placeholder="Name">
             </div>
             <div class="mb-3">
               <label for="email" class="form-label">Email:</label>
               <input required class="form-control" id="email" type="email" name="email" placeholder="Email">
             </div>
             <div class="mb-3">
               <label for="dob" class="form-label">Date of birth:</label>
               <input required class="form-control" id="dob" type="date" name="dob" placeholder="Date of birth">
             </div>
             <div class="mb-3">
               <label for="age" class="form-label">Age:</label>
               <input required readonly class="form-control" id="age" type="text" name="age" placeholder="Age">
             </div>
           </div>
           
           <div class="col-md-6">
             <div class="mb-3">
               <label for="mobile" class="form-label">Mobile number:</label>
               <input required class="form-control" id="mobile" type="tel" name="mobile" placeholder="Mobile number">
             </div>
             <div class="mb-3">
               <label for="password" class="form-label">Create new password:</label>
               <input required class="form-control" id="password" type="password" name="password" placeholder="Create strong Password">
             </div>
             <div class="mb-3">
               <label for="state" class="form-label">State:</label>
               <input required class="form-control" id="state" type="text" name="state" placeholder="Select State">
             </div>
             <div class="mb-3">
               <label for="city" class="form-label">City:</label>
               <input required class="form-control" id="city" type="text" name="city" placeholder="Select City">
             </div>
           </div>
           
           <input type="submit" value="Submit" class="btn btn-primary w-100">
           
         </form>
      </div>
    </div>
  </section>
<script>
  function calculateAge() {
    var dateOfBirth = new Date(document.getElementById("dob").value);
    var currentDate = new Date();
  
    var years = currentDate.getFullYear() - dateOfBirth.getFullYear();
    var months = currentDate.getMonth() - dateOfBirth.getMonth();
  
    if (months < 0) {
      years--;
      months += 12;
    }
  
    document.getElementById("age").value = years + "Y," + months + "M";
  }
</script>
<script>
  document.getElementById("dob").addEventListener("change", calculateAge);
</script>
</body>

</html>
