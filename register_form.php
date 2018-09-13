<!doctype html>

<html>

<head>
  <meta charset="utf-utf-8" />

  <title>Assignment #3</title>

  <!--This is the link to the CSS Stylesheet-->
  <link rel='stylesheet' href='./css/style.css' />
  <!--This link contains the Google web font link that is used by this website-->
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,600" rel="stylesheet" />
  <script type='text/javascript' src='./scripts.js'></script>
</head>

<body>
  <!--The entire form, header info and main content section are wrapped in a div to ensure that the background of the form stretches to fill the entire browser frame from top to bottom (vertically)-->
  <div id='background_fill'>
    <div id='main_wrapper'>
      <h1>Assignment #3</h1>
      <header id='title_info' class='text_align_object'>
        <h3>Please enter your data using the following forms:</h3>
      </header>

      <!--Form is wrapped in a section tag-->
      <section>

        <!--Input objects are all contained within this single form tag-->
        <form action='./register_form_handle.php' method='POST' id='main_form' class='text_align_object' onsubmit='accepted()'>
          <fieldset>
            <legend class='form_title_legend'>User Information</legend>
            <!--This is a text field input-->
            <p>
              <label for="full_name" class='input_label'>Full name:</label>
              <input type='text' size='20' maxlength='40' name='full_name' id='full_name' class='input_entry_form' placeholder='Your name here' required title='Please enter your name here' autocomplete pattern='.{2,20}' />
            </p>

            <!--This is a password field input-->
            <p>
              <label for="password_field" class='input_label'>Password field:</label>
              <input type='password' size='20' maxlength='20' name='password_field' id='password_field' placeholder='Your password here' required title='Please enter your password here' autocomplete pattern='[A-Za-z]{2,20}' />
            </p>

            <!--This is a email entry field-->
            <p>
              <label for="email_field" class='input_label'>Email field:</label>
              <input type='email' size='20' maxlength='40' name='email_field' id='email_field' placeholder='email@domain.com' title='Please enter your email here' required />
            </p>

            <!--This is a textarea field input (text box)-->
            <p>
              <label for="comments" class='input_label'>Comments:</label>
              <textarea name='comments' id='comments' placeholder='Enter comments here...' required title='Please enter your comments here'></textarea>
            </p>
          </fieldset>

          <fieldset>
            <legend class='form_title_legend'>CSS Options</legend>
            <!--This is a collection of radio button inputs and their labels-->
            <div id='color_select_region'>
              <label for="color_select_field" id='color_select_label'>Background color:</label>
              <ul>
                <li>
                  <input type='radio' name='color_select_field' id='color_green' value='green' checked='checked' />
                  <label for="color_green" class='color_value'>Green</label>
                </li>
                <li>
                  <input type='radio' name='color_select_field' id='color_red' value='red' />
                  <label for="color_red" class='color_value'>Red</label>
                </li>
                <li>
                  <input type='radio' name='color_select_field' id='color_blue' value='blue' />
                  <label for="color_blue" class='color_value'>Blue</label>
                </li>

              </ul>
            </div>

            <!--This is a drop-down menu with two groups of three options each-->
            <p>
              <label for='font_field'>Select a font:</label>
              <select name='font_field' id='font_field' size='1'>
                <optgroup label='Fonts'>
                  <option value="source_code_pro" selected='selected'>Source Code Pro</option>
                  <option value="montserrat">Montserrat</option>
                  <option value="lora">Lora</option>
                </optgroup>
              </select>
            </p>

            <!--This is a collection of three checkbox button inputs and their labels-->
            <div class='ul_region'>
              <label for="checkbox_buttons_field" class='ul_label'>Checkbox buttons field:</label>
              <ul>
                <!--First checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field[]' id='first_checkbox' value='First checkbox button' checked='checked' />
                  <label for="first_checkbox">First checkbox button</label>
                </li>
                <!--Second checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field[]' id='second_checkbox' value='Second checkbox button' />
                  <label for="second_checkbox">Second checkbox button</label>
                </li>
                <!--Third checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field[]' id='third_checkbox' value='Third checkbox button' />
                  <label for="third_checkbox">Third checkbox button</label>
                </li>
              </ul>
            </div>

          </fieldset>

          <fieldset>
            <legend class='form_title_legend'>Optional Fields</legend>
            <!--This is a text field input-->
            <p>
              <label for="text_field" class='input_label'>Text Entry Field:</label>
              <input type='text' size='20' maxlength='40' name='text_field' id='text_field' class='input_entry_form' placeholder='Leave this blank to see an error message' title='Please leave this field blank' autocomplete pattern='.{2,20}' />
            </p>
            <!--This is a collection of radio button inputs and their labels-->
            <div id='optional_radio_buttons' class='ul_region'>
              <label for="radio_buttons_field" class='ul_label'>Radio buttons:</label>
              <ul>
                <li>
                  <input type='radio' name='radio_buttons_field' id='radio_1' value='one' />
                  <label for="radio_1" class='color_value'>Option #1</label>
                </li>
                <li>
                  <input type='radio' name='radio_buttons_field' id='radio_2' value='two' />
                  <label for="radio_2" class='color_value'>Option #2</label>
                </li>
                <li>
                  <input type='radio' name='radio_buttons_field' id='radio_3' value='three' />
                  <label for="radio_3" class='color_value'>Option #3</label>
                </li>
              </ul>
            </div>
            <!--This is a collection of three checkbox button inputs and their labels-->
            <div class='ul_region'>
              <label for="checkbox_buttons_field_2" class='ul_label'>Checkbox buttons:</label>
              <ul>
                <!--First checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field_2[]' id='first_checkbox_2' value='First checkbox button' />
                  <label for="first_checkbox_2">First checkbox button</label>
                </li>
                <!--Second checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field_2[]' id='second_checkbox_2' value='Second checkbox button' />
                  <label for="second_checkbox_2">Second checkbox button</label>
                </li>
                <!--Third checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field_2[]' id='third_checkbox_2' value='Third checkbox button' />
                  <label for="third_checkbox_2">Third checkbox button</label>
                </li>
              </ul>
            </div>
          </fieldset>
          <!--These are the submit and reset button inputs-->
          <p>
            <input type='submit' name='submit_button' id='submit_button' value='Click to submit!' />
            <input type='reset' name='reset_button' id='reset_button' value='Click to reset!' />
          </p>
        </form>
      </section>


      <!--Footer contains ficticious copyright information-->
      <footer id='footer_info' class='text_align_object'>
        <hr>
        <h4><small>&copy; 2018 by Keith Smith</small></h4>
      </footer>
    </div>
  </div>

</body>

</html>
