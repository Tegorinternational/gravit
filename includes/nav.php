<nav class="py-3 px-4 shadow">
  <div class="flex flex-row">
    <!-- logo -->
    <h2 class="flex flex-col"><span class="text-left text-2xl font-medium tracking-tight my-auto"><?=$pageTitle ?></span>
    <span class="text-xs"><?=$user_data['Name']?></span></h2>
    <!-- sign in/ sign up button -->
    <button onclick="window.location.href='<?=$actionUrl ?>'" class="ml-auto py-2 px-4 border border-black rounded-full my-auto text-sm"><?=$actionName ?> &#10132;</button>
  </div>
</nav>