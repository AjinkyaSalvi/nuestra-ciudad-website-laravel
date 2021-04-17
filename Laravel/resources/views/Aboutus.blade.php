<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Nosotros | About Us</title>
    <link rel="stylesheet" href="/css/ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="./js/footer_contactus.js"></script>
     <script type="./js/login_form_validation.js"></script>
</head>
<body>
  <header>
        <!--Navigation bar   header-->
        <div class="bg_logo_div">
             <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

             <nav class="nav_header">
                  <ul>
                  <li><a class="nav_items" href="{{ route('home') }}">Inicio </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="{{ route('AboutUs') }}" id="active"> Nosotros </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="{{ route('Team') }}">Equipos </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="{{ route('contactus') }}">Contacto</a> </li>
                  <li>/</li>
                  <li><a class="nav_items" href="#login2">Inicio de Sesion
                       <div id="login2" class="login2-window">
                            <div>
                                 <a href="#" title="Close" class="login2-close"> &times;</a>
                                 <div>
                                      <h1 id="inline">Inicio de </h1>
                                      <h1 class="orange_italic">Sesion</h1>
                                 </div>

                                 @if($message = Session::get('error'))
                                  <strong>{{ $message }}</strong>
                                 @endif
                                 @if (count($errors) > 0 )
                                   <ul>
                                     @foreach($errors->all() as $error)
                                          <li style="color: 'red'; ">{{ $error }}</li><br>
                                     @endforeach
                                   </ul>
                                  @endif
                                 <form class="login_form" method="post" onsubmit="return validate_login_form()" action="{{ route('login_process') }}">
                                   @csrf
                                     <div class="login_border">

                                         <br>
                                         <label for="correo"> Correo</label>
                                         <br>
                                         <input type="email" placeholder=" Tu Correo" class="login_input" id="login_frm_email" name="login_frm_email" required>
                                         <br>
                                         <br>
                                         <label for="contraseña"> Contraseña</label>
                                         <br>
                                         <input type="password" placeholder=" Tu Contraseña" class="login_input" id="login_frm_password" name="login_frm_password" required>
                                         <br>
                                         <br>
                                     </div>
                                     <br>
                                     <input type="submit" name="login_frm_btn" value="LOGIN" class="login_button">
                                 </form>
                            </div>
                       </div>
                       <!--LOGIN POPUP ENDS HERE-->
                       </a>
                  </li>
                  </ul>
             </nav>
        </div>
        <!--Banner code here-->
            <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">NOSOTROS</h1>
                    <h5 class="banner_text">INICIO > NOSOTROS</h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
   </header>
   <div class="content_wrap">
               <!--displaying the content through cards-->
               <div class="aboutus_vm">
                    <div>
                           <h2 class="display_inline"><font class="orange_u">Nu</font>estra</h2>
                           <h2 class="orange_italic">  MISIÓN</h2>
                           <p><br>
                            @foreach($data as $item)
                             {!! $item->AUMission !!}
                            @endforeach
                          </p>
                      </div>
                   <div>
                        <h2 class="display_inline"><font class="orange_u">Nu</font>esta</h2>
                           <h2 class="orange_italic">  VISIÓN</h2>
                           <p>
                             <br>
                             @foreach($data as $item)
                              {!! $item->AUVission !!}
                             @endforeach
                            </p>

                  </div>
                   <!-- Rows End here-->
               </div><br><br><br><br><br>
               <!--new Row starts here-->
            <div class="aboutus_comment_box">
            <div class="aboutus_comments">
                <!--column starts here-->
                <div class="comment_box">
                    <div class="comments">
                        <p>
                          @foreach($data as $item)
                           {!! $item->AUCommentA !!}
                          @endforeach
                            <footer class="comment_box_foot">QUÉ BRINDAMOS?</footer>
                        </p> <img src="./Images/About Us.png" class="aboutus_img">
                    </div>

                </div>
                <!-- new column starts here-->
                <div class="comment_box">
                    <div class="comments">
                        <p>
                          @foreach($data as $item)
                           {!! $item->AUCommentB !!}
                          @endforeach
                            <footer class="comment_box_foot">QUÉ DESARROLLAMOS?</footer>
                        </p> <img src="./Images/About Us.png" class="aboutus_img">
                    </div>

                </div>
                <!--new column starts here-->
                <div class="comment_box">
                    <div class="comments">
                        <p>
                          @foreach($data as $item)
                           {!! $item->AUCommentC !!}
                          @endforeach
                            <footer class="comment_box_foot">PARA QUÉ TRABAJAMOS?</footer>
                        </p> <img src="./Images/About Us.png" class="aboutus_img">
                    </div>

                </div>
                <!-- Rows End here-->
           </div>
         </div>
         <br><br><br><br><br><br>
         <!--   -***-***-***-   -***-***-***-   -***-***-***-   Nosotros Valores   -->
         <div>
             <div class="center_align">
                 <h2 class="display_inline">Nuestros</h2>
                 <h2 class="orange_italic">  Valores</h2>
             </div>
             <br>

             <div class="nv_cointainer">
                  <div>
                       <h2><font class="orange_u">CA</font>LIDAD</h2>
                        @foreach($calidad as $item)
                          {{ $item['OVContent'] }}
                        @endforeach
                  </div>
                  <div>
                       <h2><font class="orange_u">CO</font>NFIANZA</h2>
                       @foreach($confianza as $item)
                         {{ $item['OVContent'] }}
                       @endforeach
                  </div>
                  <div>
                       <h2><font class="orange_u"> CO</font>HERENCIA</h2>
                       @foreach($coherencia as $item)
                         {{ $item['OVContent'] }}
                       @endforeach
                  </div>
                  <div>
                       <h2><font class="orange_u">CO</font>MPROMISO</h2>
                       @foreach($compromiso as $item)
                         {{ $item['OVContent'] }}
                       @endforeach
                  </div>
                  <div>
                       <h2><font class="orange_u">CO</font>OPERACIÓN</h2>
                       @foreach($cooperacion as $item)
                         {{ $item['OVContent'] }}
                       @endforeach
                  </div>
                  <div>
                       <h2><font class="orange_u">TR</font>ANSPARENCIA</h2>
                       @foreach($transparencia as $item)
                         {{ $item['OVContent'] }}
                       @endforeach
                  </div>
             </div>
  </div>
</div>
   <!--footer starts here-->
   <footer>
       <!--FIRST BLOCK OF FOOTER-->
       <!--CONTACT US EMAIL US PART OF FOOTER-->

       <div class="trial_footer_grid">
           <div class="trial_upper_footer">
               <br>
               <br>
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
                       <br>
                       <br>
                   </div>
               </div>
           </div>

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
                           <font class="copyright_orange">DiazApps </font><font class="copyright_text">&#169; 2020 All Rights Resesrved.
                </font>
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
       </div>
       <!---->
       <!---->
       <!---->
   </footer>
   <!--footer has ended ABOVE here-->

</body>

</html>
