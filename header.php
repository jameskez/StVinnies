<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <header>
  <div class="logo"> 
   <?php if(function_exists('the_custom_logo')) {
     the_custom_logo();
     } ?>
   </div>
   
    <nav>
      <ul>
        <li>
      <?php wp_nav_menu(array(
     'menu' => 'primary-nav',
     'theme_location' => 'primary'
      )
      ); ?>
        </li>  
      </ul>
    </nav>
    
  </header>
  