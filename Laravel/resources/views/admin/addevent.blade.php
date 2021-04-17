<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHBOARD</title>

    <link rel="stylesheet" href="/css/ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/footer_contactus.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--Navigation bar   header-->
        <header>
            <div class="bg_logo_div">
                <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>
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
                  <li><a class="nav_items" href="{{ route('contactus') }}">Contacto</a> </li>
                  <li>/</li>
                        <li><a class="nav_items" href="{{ route('logout') }}" id="active">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <!--Banner code here-->
            <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">Dashboard</h1>
                    <h5 class="banner_text">Welcome, Admin </h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
          </div>
            <div class="content_wrap"><br>
              <a href="{{ route('admindashboard') }}"><h2 class="orange_italic">< Back to Admin dashboard</h2></a>
              <br><br>
                <div class="userd_events_grid">
                   <h2 class="orange_italic"> Edit this Event</h2>
                   <br>
                   <form class='login_form' action='{{ route('insertevent')}}' method='post'>
                     @csrf
                                                        <br>
                                                        <label for='event_namee' class='grey_color'>Event Name:</label><br><br>
                                                        <input type='text' name='event_namee' class='login_input' required ><br><br>

                                                        <label for='event_date' class='grey_color'>Event Date: </label><br><br>
                                                        <input type='date' name ='event_date' class='login_input' required ><br><br>

                                                         <label for='event_description' class='grey_color'>Event Description: </label><br><br>
                                                        <textarea name='event_description' class='dashboard_input' required>

                                                        </textarea>
                                <br>
                                <input type='submit' value='Update Event' name='event_add_btn' class='login_button' id='white' >
                    </form>
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
