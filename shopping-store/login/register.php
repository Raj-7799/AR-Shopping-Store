<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

  <link rel="stylesheet" href="css/style.css">

</head>
<body background-color="#959d9e">
<!--  <img src="logo_snap.png" class="image">-->
  <div class="cotn_principal">
    <div class="cont_centrar">

      <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">

              <h2>LOGIN</h2>
              <p>Welcome Back!!.</p>
              <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
            </div>
          </div>
          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>SIGN UP</h2>


              <p>Sign Up for a unique shopping experience!!</p>

              <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
            </div>
          </div>
        </div>


        <div class="cont_back_info">
          <div class="cont_img_back_grey">
            <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
          </div>

        </div>
        <div class="cont_forms" >
          <div class="cont_img_back_">
            <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
          </div>
          <form  action="login_redirect.php" method="post">
            <div class="cont_form_login">
              <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
              <h2>LOGIN</h2>
                <input type="text" id="login_email" placeholder="Email" name="email" required/>
                <span id="ue1" class="error" style="display: none">*Email is compulsory.</span></td>
                <input type="password" id="login_password" placeholder="Password" name="pass" required/>
                <span id="ps1" class="error" style="display: none">*Password is compulsory.</span></td>
                <button class="btn_login" id="login_but" onclick="validate_login()">LOGIN</button>
            </div>
          </form>
          <!--to change the size of the form change height in class="cont_forms_active_sign_up"-->
          <form  action="register_redirect.php" method="post">
            <div class="cont_form_sign_up">
              <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
              <h2>SIGN UP</h2>
              <input id="signup_email"name="email" type="text" placeholder="Email" required/>
              <span id="se1" class="error" style="display: none">*Please enter a valid email.</span></td>
              <input id="signup_user"name="username" type="text" placeholder="Username" required/>
              <span id="us1" class="error" style="display: none">*Please enter an Username.</span></td>
              <input id="signup_pass" name="pass" type="password" placeholder="Password" required/>
              <span id="pass1" class="error" style="display: none">*Please enter a Password.</span></td>
              <input id="signup_con_pass"name="conpass" type="password" placeholder="Confirm Password" required />
              <span id="emtconpass1" class="error" style="display: none">*Please enter a Password.</span></td>
              <span id="conpass1" class="error" style="display: none">*Password do not match.</span></td>
              <textarea id="signup_add" placeholder="Address" rows="3" cols="20" required></textarea>
              <span id="as1" class="error" style="display: none">*Please enter your Address.</span></td>
              <input id="signup_pin" type="text" name="pincode" placeholder="Pincode" maxlength="6" required/>
              <span id="pins1" class="error" style="display: none">*Please Enter your Pincode.</span></td>
              <div class="list">
              <select name="slist">
                  <option value="">------------Select State------------</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Pondicherry">Pondicherry</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttaranchal">Uttaranchal</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="West Bengal">West Bengal</option>
                  </select>
              </div>
              <span id="states1" class="error" style="display: none">*Please select a state.</span></td>
              <div class="rb">
                  <input name="gender" type="radio" id="gen1"/>
                  <label for="gen1">Male</label><br/>
                  <br/>
                  <input name="gender" type="radio" id="gen2"/>
                  <label for="gen2">Female</label>
              </div>
              <span id="genders1" class="error" style="display: none">*Please Select your Gender.</span></td>
              <input id="signup_contact" type="text" name="contact" placeholder="Contact No" value="+91-" required maxlength="10"/>
              <span id="contacts1" class="error" style="display: none">*Please Enter your Contact No.</span></td>
              <button class="btn_sign_up" onclick="validate_signup() ">SIGN UP</button>

            </div>
          </form>

        </div>

      </div>
    </div>
  </div>

  <script src="js/register.js"></script>
</div>
</body>
</html>
