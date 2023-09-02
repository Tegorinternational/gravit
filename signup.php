<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <h1 class="text-2xl fw-bold text-start text-capitalize">User Sign Up</h1>
        <p>Create a new account to log in as User</p>
      </div>
      <div class="row">
         
         <form class="row g-3" action="includes/user_signup.php" method="POST">
           
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
               <label for="state" class="form-label">Country:</label>
               <select name="country" id="country" class="form-control">
                 <option value="">-- Country --</option>
                 <option value="IN">India</option>
               </select>
             </div>
             <div class="mb-3">
               <label for="state" class="form-label">State:</label>
               <select name="state" id="region" class="form-control">
                 <option value="">-- State --</option>
               </select>
             </div>
             <div class="mb-3">
               <label for="city" class="form-label">City:</label>
               <select name="city" id="city" class="form-control">
                 <option value="">-- City --</option>
               </select>
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

<script>
  $(document).ready(function() {
    let selectedCountry = "";
    let selectedRegion = "";
    let selectedCity = "";
    const apiKey = "00000000000000000000000000000000";

    const countryUrl = `https://battuta.medunes.net/api/country/all/?key=${apiKey}&callback=?`;

    $.getJSON(countryUrl, function(data) {
      $.each(data, function(index, value) {
        $("#country").append(
          `<option value="${value.code}">${value.name}</option>`
        );
      });
    });

    $("#country").change(function() {
      selectedCountry = $("#country option:selected").text();
      const countryCode = $("#country").val();
      
      const regionUrl = `https://battuta.medunes.net/api/region/${countryCode}/all/?key=${apiKey}&callback=?`;
      $.getJSON(regionUrl, function(data) {
        $("#region").empty().append('<option value="">Please select your region</option>');
        $.each(data, function(index, value) {
          $("#region").append(
            `<option value="${value.region}">${value.region}</option>`
          );
        });
      });
    });

    $("#region").on("change", function() {
      selectedRegion = $("#region option:selected").text();
      const countryCode = $("#country").val();
      const region = $("#region").val();
      
      const cityUrl = `https://battuta.medunes.net/api/city/${countryCode}/search/?region=${region}&key=${apiKey}&callback=?`;
      $.getJSON(cityUrl, function(data) {
        $("#city").empty().append('<option value="">Please select your city</option>');
        $.each(data, function(index, value) {
          $("#city").append(
            `<option value="${value.city}">${value.city}</option>`
          );
        });
      });
    });

    $("#city").on("change", function() {
      selectedCity = $("#city option:selected").text();
    });
  });
</script>

  
</body>

</html>
