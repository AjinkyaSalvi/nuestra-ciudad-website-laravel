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

        <div class="content_wrap">
          @if($operation != NULL)
            <br><text style='color:green;'>{{$operation ?? ''  }}</text><br>
          @endif
          <!---Edit content Starts here-------------------------------------------------->
                <div class="userd_events_grid">
                    <h1 class="orange_italic">Content Edit</h1>
                    <br>
                    <h4 style="color: gray;">Click on the page whoose content you want to edit</h4>

                    <table>

                        <tr>
                            <td>
                                <button name='home_page_edit' class='login_button' onclick="window.location='{{ route('home_edit')}}'"> Home Page</button>
                            </td>
                            <td>
                                <button name='aboutus_page_edit'class='login_button' onclick="window.location='{{ route('about_us_edit')}}'"> About Us </button>
                            </td>
                            <td>
                                <button name='team_page_edit' class='login_button'> Team Page</button>
                            </td>
                             <td>
                                <button name='contact_page_edit' class='login_button' onclick="window.location='{{ route('contact_us_edit')}}'"> Contact Us Page</button>
                            </td>
                        </tr>

                    </table>
                    <br>
                </div>
                <br>
                <div class="userd_events_grid">
                   <h2 class="orange_italic"> Upcoming Events</h2>
                   <br>
                   <br>

                   <!---TRIAL-Event tyable starts herererere-->
                 <table>
                  <form method="post" action="{{ route('edit_event') }}" >
                    @csrf
                     @foreach($events as $item)
                        <tr><td><br></td></tr>
                     <!--Row starts here -->
                     <tr class='user_events_info_td'>
                        <td class='userd_events_info_td'>
                          <input type='radio' name='event_choice' required value="{{ $item->Eventid }}">
                              <font id='gray'>Event </font>
                        </td>
                        <td class='user_events_info_td'>
                            {{ $item->Ename}}
                        </td>
                        <td class='user_events_info_td' id='padding3'>
                            <font id='gray'>Event on :</font> {{$item->Edate}}
                        </td>
                        <td class='user_events_info_td'>
                            <font id='gray'> Status:</font>
                                      @if($item->Eclosedflag == 1)
                                          </text style='color:green;'> OPEN </text>
                                       @else
                                          </font color='red'> CLOSED </font>
                                      @endif
                        </td>
                      </tr>
                      @endforeach
                      <tr><td><br></td></tr>
                      <tr class="user_events_info_td">
                               <!--Edit button starts-->
                               <td class="user_events_info_td" id="padding3">
                                  <input type="submit" name="edit_event" value="Edit Event" title="Edit this Blog" class="contact_us_form_btn">
                                </td>
                               <!--Edit blog button ends-->
                               <!--Delete button code starts here-->
                               <td class="user_events_info_td" id="padding3">
                                   <!--Delete button starts-->
                                     <input type="submit" name="edit_event" value="Delete Event" title="Delete this Blog" class="contact_us_form_btn">
                                </td>
                           <!--Delete button code Ends here-->
                           <td class="user_events_info_td" id="padding3">
                                <input type="submit" name="edit_event" value="Add Event" title="Add Blog" class="contact_us_form_btn">
                           </td>
                         </form>

                         </tr>
                           <tr><td><br></td></tr>

                 </table>

          <!---End of events--------------------------------->
            </div>
              <br>
              <br>

              <br>
              <!---Blogs section starts here-->
              <div class="userd_events_grid">
                <h2 class="orange_italic"> Posted Blogs</h2><br>
                <table>
                <form method="post" action="{{ route('edit_blog') }}">
                  @csrf
                   @foreach($blogs as $item)
                  <tr> <td> <br> </td> </tr>
                    <!--Row starts here -->
                  <tr class='user_events_info_td'>
                      <td class='userd_events_info_td'>
                          <input type='radio' name='blog_choice' required value='{{ $item->Bid }}'>
                      </td>
                      <td class='user_events_info_td'>{{ $item->Bname }}</td>
                      <td class='user_events_info_td' id='padding3'>
                              <font id='gray'>Blog date :</font> {{ $item->Bdate }}
                      </td>
                  </tr>
                  @endforeach
                  <tr>
                      <td> <br> </td> </tr>
                  <tr class="user_events_info_td">
                      <!--Edit button starts-->
                      <td class="user_events_info_td" id="padding3">
                            <input type="submit" name="edit_blog" value="Edit Blog" title="Edit this Blog" class="contact_us_form_btn">
                      </td>
                      <!--Edit blog button ends-->
                      <!--Delete button code starts here-->
                      <td class="user_events_info_td" id="padding3">
                          <!--Delete button starts-->
                          <a href="#">
                            <input type="submit" name="edit_blog" value="Delete Blog" title="Delete this Blog" class="contact_us_form_btn">
                          </a>
                      </td>
                          <!--Delete button code Ends here-->
                          <td class="user_events_info_td" id="padding3">
                               <input type="submit" name="edit_blog" value="Add Blog" title="Add Blog" class="contact_us_form_btn">
                          </td>
                </form>


             </tr>
                <tr>
                    <td> <br> </td> </tr>
                </table>
                <!--End of cuser gridr-->
            </div>
        <!--End of content wrapper-->
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
