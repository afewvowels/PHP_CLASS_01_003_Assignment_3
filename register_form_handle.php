<!-- // Data validation methods
// isset();
// empty();
// filter_var($data, FILTER_VALIDATE_EMAIL);
// filter_var($data, FILTER_VALIDATE_URL);
// filter_var($data, FILTER_VALIDATE_BOOLEAN);
// filter_var($data, FILTER_VALIDATE_INT);
// filter_var($data, FILTER_VALIDATE_FLOAT);
// filter_var($data, FILTER_VALIDATE_IP);
// filter_var($data, FILTER_VALIDATE_MAC);
// is_array();
// is_string(); -->

<!--
Types of data:
  User inputs:
    textfields, textarea, search, url, email, password, color, range, number, progress, date, time, datetime
  Use:
    empty();
    !empty();

  User selections:
    checkboxes, radiobuttons, pull-downs, scroll-down lists
  Use:
    isset();
-->

<!doctype html>

<html>
<head>
  <title>Assignment #3</title>

  <link rel='stylesheet' href='./css/style_handle.css' />
  <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat|Source+Code+Pro:400,600" rel="stylesheet" />
</head>

<?php

$errors_array = array();

if(!empty($_POST['full_name'])&&is_string($_POST['full_name'])) {
  $full_name = htmlspecialchars(add_slashes($_POST['full_name']));
}else{
  $errors_array['full_name'] = "Please enter a valid text field entry!";
}

if(!empty($_POST['password_field'])) {
  $password_field = htmlspecialchars(add_slashes($_POST['password_field']));
}else{
  $errors_array['password_field'] = "Please enter a valid password field entry!";
}

if(!empty($_POST['email_field'])&&filter_var($_POST['email_field'], FILTER_VALIDATE_EMAIL)) {
  $email_field = htmlspecialchars(add_slashes($_POST['email_field']));
}else{
  $errors_array['email_field'] = "Please enter a valid email address entry!";
}

if(!empty($_POST['comments'])&&is_string($_POST['comments'])) {
  $comments = htmlspecialchars(add_slashes($_POST['comments']));
}else{
  $errors_array['comments'] = "Please enter a valid text field entry!";
}

if(isset($_POST['radio_buttons_field'])&&is_string($_POST['radio_buttons_field'])) {
  $radio_buttons_field = $_POST['radio_buttons_field'];
}else{
  $errors_array['radio_buttons_field'] = "Please enter a valid radio selection entry!";
}

if(isset($_POST['font_field'])) {
  $font_field = $_POST['font_field'];
}else{
  $errors_array['font_field'] = "Please enter a valid pull down menu selection!";
}

function add_slashes($data){
  if(get_magic_quotes_gpc()) $data = stripslashes($data);
  return addslashes($data);
}

function strip_slashes($data){
  return stripslashes($data);
}

?>

<body id='<?php echo $radio_buttons_field ?>' class='<?php echo $font_field ?>'>

  <section id='results'>
    <div>
      <h1>Assignment #3</h1>
      <header id='title_info' class='text_align_object'>
        <h3>Here are the results from your form submission:</h3>
      </header>

      <fieldset>
        <legend class='form_title_legend'>User Information</legend>
        <!--This is a text field input-->
        <p class='results_label'>Full name:</p>
        <div id='div_name' class='div_results'><?php echo $full_name ?></div>

        <!--This is a password field input-->
        <p class='results_label'>Password:</p>
        <div id='div_password' class='div_results'><?php echo $password_field ?></div>

        <!--This is a email entry field-->
        <p class='results_label'>Email address:</p>
        <div id='div_email' class='div_results'><?php echo $email_field ?></div>

        <!--This is a textarea field input (text box)-->
        <p class='results_label'>Comments:</p>
        <div id='div_comments' class='div_results'><?php echo $comments ?></div>
        <br>
      </fieldset>
    </div>
  </section>

</body>
</html>
