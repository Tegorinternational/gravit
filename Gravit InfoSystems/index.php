<?php
session_start();
$user_data = $_SESSION['user_data'];

if (isset($user_data) && !empty($user_data)) {
    $actionName = "Logout";
    $actionUrl = "includes/logout.php";
    $heroBtnName = "Learn more";
    $heroBtnUrl = "";
} else {
    $actionName = "Log in";
    $actionUrl = "signin.php";
    $heroBtnName = "Sign In";
    $heroBtnUrl = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gravit Infosystems</title>
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
  <script src="/assets/js/tailwind"></script>
  <link href="/dist/main.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<header class="">
<?php
$pageTitle = "Gravit Infosystems";
include('includes/nav.php');
?>

<div class="container mx-auto w-full">

<div class="w-full mx-auto flex flex-wrap aspect-video p-2">
<div class="w-full h-full mx-auto bg rounded-lg flex">
<div class="z-20 mt-auto text-white p-3">
<p class="uppercase text-xs text-white">
Website Development Services
</p>
<h2 class="capitalize text-xl font-bold leading-6">we are website and apps<br>development agency</h2>
<button onclick="window.location.href='signup.php'" class="mt-3 border border-white px-4 py-1 rounded-full text-center text-base"><?=$heroBtnName ?> &#10132;</button>
</div>
</div>
</div>

<div class="w-full mx-auto p-2">
<div class="bg-gradient-to-bl from-cyan-200 to-purple-300 p-4 rounded-lg flex flex-col">
<img class="rounded-t w-full aspect-video object-cover" src="/assets/images/work.jpg" alt="">

<div class="w-full mx-auto bg-black/10 mt-2 p-2 rounded-b">
<div class="flex flex-row justify-between">
<h3 class="my-auto flex flex-col"><span class="uppercase text-gray-700 text-xs">our latest product</span><span class="font-bold text-2xl">Gravity Web</span></h3>
<button class="h-10 w-10 text-center bg-gray-100 rounded-full my-auto">&#10132;</button>
</div>
</div>
</div>

</div>

</div>
</header>

<section class="">
<div class="container mx-auto px-6 py-10">
<div class="">
<p class="text-base font-bold text-gray-600 w-full text-left">
About
</p>
<div class="w-full">
<h3 class="capitalize text-2xl font-bold">we help businesses to make their product come to life, worldwide.</h3>
</div>
<div class="w-full">
<p class="text-base text-gray-500">
Our experience has helped our clients launch new companies in the digital arena throughout the years.
Take a look at some of our greatest work.
</p>
<button class="bg-blue-100 py-2 px-5 rounded-full text-sm text-blue-600 mt-2">Learn more &#10132;</button>
</div>
</div>
</div>
</section>

<section class="">
<div class="container mx-auto p-2">
<div class="w-full bg-gray-900 rounded-lg py-5">

<div class="w-full px-6">
<p class="text-base font-bold text-gray-400 w-full text-center mx-auto ">
Services
</p>
<h3 class="capitalize text-2xl font-bold text-gray-200 text-center">we help businesses to make their product come to life, worldwide.</h3>
</div>

<div class="w-full flex flex-wrap px-2 md:px-4 py-8">
<div class="w-full md:w-1/2 p-4">
<div class="w-full h-full bg-gradient-to-bl from-blue-300 to-purple-400 rounded-lg flex flex-row p-3">
<img class="w-32 aspect-square object-cover my-auto rounded-md mr-3" src="/assets/images/web.jpeg" alt="">
<div class="my-auto">
<h3 class="capitalize text-base leading-4 font-bold">Web development services</h3>
<p class="text-xs mt-2 text-gray-600 leading-4 ">
Our experience has helped our clients launch new...
</p>
<button class="bg-blue-100 py-2 px-5 rounded-full text-sm text-blue-600 mt-2">Learn more &#10132;</button>
</div>
</div>
</div>
<div class="w-full md:w-1/2 p-4">
<div class="w-full h-full bg-gradient-to-bl from-blue-300 to-purple-400 rounded-lg flex flex-row p-3">
<img class="w-32 aspect-square object-cover my-auto rounded-md mr-3" src="/assets/images/app.jpeg" alt="">
<div class="my-auto">
<h3 class="capitalize text-base leading-4 font-bold">Android/IoS App development</h3>
<p class="text-xs mt-2 text-gray-600 leading-4 ">
Our experience has helped our clients launch new...
</p>
<button class="bg-blue-100 py-2 px-5 rounded-full text-sm text-blue-600 mt-2">Learn more &#10132;</button>
</div>
</div>
</div>
<div class="w-full md:w-1/2 p-4">
<div class="w-full h-full bg-gradient-to-bl from-blue-300 to-purple-400 rounded-lg flex flex-row p-3">
<img class="w-32 aspect-square object-cover my-auto rounded-md mr-3" src="/assets/images/software.jpeg" alt="">
<div class="my-auto">
<h3 class="capitalize text-base leading-4 font-bold">Software development services</h3>
<p class="text-xs mt-2 text-gray-600 leading-4 ">
Our experience has helped our clients launch new...
</p>
<button class="bg-blue-100 py-2 px-5 rounded-full text-sm text-blue-600 mt-2">Learn more &#10132;</button>
</div>
</div>
</div>
<div class="w-full md:w-1/2 p-4">
<div class="w-full h-full bg-gradient-to-bl from-blue-300 to-purple-400 rounded-lg flex flex-row p-3">
<img class="w-32 aspect-square object-cover my-auto rounded-md mr-3" src="/assets/images/ml.png" alt="">
<div class="my-auto">
<h3 class="capitalize text-base leading-4 font-bold">Machine learning</h3>
<p class="text-xs mt-2 text-gray-600 leading-4 ">
Our experience has helped our clients launch new...
</p>
<button class="bg-blue-100 py-2 px-5 rounded-full text-sm text-blue-600 mt-2">Learn more &#10132;</button>
</div>
</div>
</div>

</div>

</div>
</div>
</section>

<section class="">
<div class="container mx-auto px-6 py-20 overflow-hidden">
<div class="mx-auto pb-10">
<h1 class="text-2xl font-semibold text-left capitalize lg:text-3xl tracking-wide text-gray-900">contact us</h1>
<p class="">
We’d love to hear from you
</p>
</div>
<div class="w-full mx-auto flex flex-wrap">
<div class="hidden lg:block md:block w-1/2  w-full grayscale md:pr-2 md:w-1/2 my-auto">
<img loading="lazy" class="w-full aspect-square h-full object-center object-cover rounded-lg" src="/assets/images/banner.jpg" alt="">
</div>
<div class="w-full md:w-1/2 md:pl-2 mx-auto my-auto">

<form action="includes/contact.php" method="POST">
<input class="w-full px-4 py-3 rounded-full bg-white text-gray-900 outline-none focus:outline-blue-600 border border-gray-300 mb-5" id="name" type="text" name="name" placeholder="Name">

<input class="w-full px-4 py-3 rounded-full bg-white text-gray-900 outline-none focus:outline-blue-600 border border-gray-300 mb-5" id="email" type="email" name="email" placeholder="Email">

<textarea class="w-full border border-gray-300 bg-white rounded-xl text-gray-900 p-4 h-32 block mb-5 outline-none focus:outline-blue-600" placeholder="Message" name="message" id="message"></textarea>

<input type="submit" value="Submit" class="w-full text-lg text-center py-2 bg-blue-600 text-white rounded-full" />
</form>

</div>
</div>
</div>
</section>


<?php
include('includes/footer.php');
?>


</body>
</html>