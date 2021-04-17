<!--Shubham Phape || Student Id.: 1001773736-->
<!--Ajinkya Salvi || Student Id.: 1001773996 -->

<!DOCTYPE html>
<html lang="en">

<head>
     <title>DASHBOARD</title>

     <meta charset="utf-8">
     <link rel="stylesheet" href="/css/ciudad.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <script src="./js/footer_contactus.js"></script>
</head>

<body>
     <div id="wrapper">

          <!--Header-->
          <header>
               <div class="bg_logo_div">
                    <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

                    <!--Navigation Bar-->
                    <nav class="nav_header">
                         <ul>
                              <li><a class="nav_items" href="{{ route('home') }}">Inicio </a></li>
                              <li>/</li>
                              <li><a class="nav_items" href="{{ route('AboutUs') }}"> Nosotros </a></li>
                              <li>/</li>
                              <li><a class="nav_items" href="{{ route('Team') }}">Equipos </a></li>
                              <li>/</li>
                              <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                              <li>/</li>
                              <li><a class="nav_items" href="{{ route('contactus') }}">Contacto</a></li>
                              <li>/</li>
                              <li><a class="nav_items" href="{{ route('logout') }}" id="active">Log Out</a></li>
                         </ul>
                    </nav>
               </div>

               <!--Banner-->
               <div class="banner_div" >
                    <img  class="banner_div_img" src="./Images/Banner.png">

                    <div class="banner_outter_text">
                         <h1 class="banner_text">Dashboard</h1>
                         <h5 class="banner_text">Welcome, Admin!</h5>
                    </div>
               </div>
          </header>

          <!--Body-->
          <h1 id="active">Edit the Content in 'Our Values'</h1>
          <div class="userd_events_grid">
               <h3 id="active">Nuestros</h3>
               <h3><i>Valores</i></h3>
               <br>
          </div>

          <!--Row 01-->
          <div class="userd_events_grid">
               <form method="post" action="{{route('values_update')}}">
                    <b> CALIDAD </b>
                    <br>

                    @csrf
                    <textarea name='txt_calidad' class='values_input'>
                         <!-- Code -->
                    </textarea>
                    <br> &nbsp;&nbsp;

                    <input type='submit' name='edit_calidad' value='Edit above content' title="Add Blog" class="contact_us_form_btn">
              </form>
              <br>
          </div>
          <br>

          <!--Row 02-->
          <div class="userd_events_grid">
               <form method="post" action="{{route('values_update')}}">
                    <b> COHERENCIA </b>
                    <br>

                    @csrf
                    <textarea name='txt_coherencia' class='values_input'>
                         <!-- Code -->
                    </textarea>
                    <br> &nbsp;&nbsp;

                    <input type='submit' name='edit_coherencia' value='Edit above content' title="Add Blog" class="contact_us_form_btn">
               </form>
               <br>
          </div>
          <br>

          <!--Row 03-->
          <div class="userd_events_grid">
               <form method="post" action="{{route('values_update')}}">
                    <b> COMPROMISO </b>
                    <br>

                    @csrf
                    <textarea name='txt_compromiso' class='values_input'>
                         <!-- Code -->
                    </textarea>
                    <br> &nbsp;&nbsp;

                    <input type='submit' name='edit_compromiso' value='Edit above content' title="Add Blog" class="contact_us_form_btn">
               </form>
               <br>
          </div>
          <br>

          <!--Row 04-->
          <div class="userd_events_grid">
               <form method="post" action="{{route('values_update')}}">
                    <b> CONFIANZA </b>
                    <br>

                    @csrf
                    <textarea name='txt_confianza' class='values_input'>
                         <!-- Code -->
                    </textarea>
                    <br> &nbsp;&nbsp;

                    <input type='submit' name='edit_confianza' value='Edit above content' title="Add Blog" class="contact_us_form_btn">
               </form>
               <br>
          </div>
          <br>

          <!--Row 05-->
          <div class="userd_events_grid">
               <form method="post" action="{{route('values_update')}}">
                    <b> COOPERACION </b>
                    <br>

                    @csrf
                    <textarea name='txt_cooperacion' class='values_input'>
                         <!-- Code -->
                    </textarea>
                    <br> &nbsp;&nbsp;

                    <input type='submit' name='edit_cooperacion' value='Edit above content' title="Add Blog" class="contact_us_form_btn">
               </form>
               <br>
          </div>
          <br>

          <!--Row 06-->
          <div class="userd_events_grid">
               <form method="post" action="{{route('values_update')}}">
                    <b> TRANSPARENCIA </b>
                    <br>

                    @csrf
                    <textarea name='txt_transparencia' class='values_input'>
                         <!-- Code -->
                    </textarea>
                    <br> &nbsp;&nbsp;

                    <input type='submit' name='edit_transparencia' value='Edit above content' title="Add Blog" class="contact_us_form_btn">
               </form>
               <br>
          </div>
          <br>

          <!--Footer-->
          <footer>
               <div class="trial_footer_grid">
                    <!--Upper Footer-->
                    <div class="trial_upper_footer">
                         <br><br>
                         <div class="trial_inner_grid1">
                              <div>
                                   <h1 class="footer_text">Contactate con </h1>
                                   <h1 class="orange_italic"> Nosotros</h1>
                              </div>

                              <div>
                                   <form name="form_footer_contact_us" id="form_footer_contact_us" method="post" action="{{ route('footer_contactfrm') }}" onsubmit="return validate_footer_email()">
                                        @csrf
                                        <input type="email" name="form_footer_contact_email" id="form_footer_contact_email" placeholder="Email" class="Email_textbox" required>
                                        <input type="submit" name="contact_us_email_btn" value="ENVAIR" id="contact_us_email_btn">
                                   </form>
                                   <br><br>
                              </div>
                         </div>
                    </div>

                    <!--Lower Footer-->
                    <div class="trial_lower_footer">
                         <br>
                         <div class="trial_inner_grid2">
                              <img src="./Images/icons/email.png" class="social_item">
                              <img src="./Images/icons/twitter.png" class="social_item">
                              <img src="./Images/icons/instagram.png" class="social_item">
                         </div>
                         <br>

                         <div class="trial_lower_footer">
                              <div class="copyright_div">
                                   <div class="footer_item1">
                                        <font class="copyright_orange">DiazApps </font>
                                        <font class="copyright_text">&#169; 2020 All Rights Resesrved.</font>
                                   </div>

                                   <div class="footer_item2">
                                        <a href="#wrapper">
                                             <img class="top_btn" src="Images/icons/big_up_box.png">
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </footer>
     </div>
</body>
</html>
