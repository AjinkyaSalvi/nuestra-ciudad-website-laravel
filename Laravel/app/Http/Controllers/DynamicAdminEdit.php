<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\home;
use App\wevents;
use App\blogs;
use App\our_values;
use App\aboutus;
use App\contactus;
use App\cusmedia;

class DynamicAdminEdit extends Controller
{
     // 'Home' Edit Functions
     public function homedataedit() {
          $hd= home::all();
          return view('admin/dynamic/homeinsert',['data' => $hd]);
     }

     public function updatehomedata() {
          switch (request('edit_objectives')) {
               // Update Banner
               case 'Edit banner':
                    $newbanner=['HBanner'=>request('gente')];
                    home::where('homeid', 1)->update($newbanner);
                    break;

               // Update Objective
               case 'Edit objective':
               $newbanner=['HObjectives'=>request('objectives')];
               home::where('homeid', 1)->update($newbanner);
               break;
          }

          //   Message to Admin
          $eventsdata= wevents::all();
          $blogsdata= blogs::all();

          $data_tobe=['events' => $eventsdata,
               'redirect_f' => '0',
               'blogs' => $blogsdata,
               'operation'=> 'Successfully updated Home data'
          ];

          // Return to AdminDashboard after Updating
          return view('admin/admindashboard', $data_tobe);
     }

     // 'Our Values' Edit Functions
     public function ourvaluesdataedit() {
          $ovd= our_values::all();
          return view('admin/dynamic/ourvaluesinsert',['data' => $ovd]);
     }

     // 'About Us' Edit Functions
     public function aboutusdataedit() {
          $aud= aboutus::all();
          return view('admin/dynamic/aboutusinsert',['data' => $aud]);
     }

     public function updateaboutussdata() {
          switch (request('edit_aboutus')) {
               // Update 'Our Mission'
               case 'Edit our misson':
                    $newmission=['AUMission'=>request('txt_mission')];
                    aboutus::where('id', 1)->update($newmission);
                    break;

               // Update 'Our Vision'
               case 'Edit our vision':
                    $newvision=['AUVission'=>request('txt_vission')];
                    aboutus::where('id', 1)->update($newvision);
                    break;

               // Update Comment 'A'
               case 'Edit comment A':
                    $newcommentA=['AUCommentA'=>request('txt_coomentA')];
                    aboutus::where('id', 1)->update($newcommentA);
                    break;

               // Update Comment 'B'
               case 'Edit comment B':
                    $newcommentB=['AUCommentB'=>request('txt_coomentB')];
                    aboutus::where('id', 1)->update($newcommentB);
                    break;

               // Update Comment 'C'
               case 'Edit comment C':
                    $newcommentC=['AUCommentC'=>request('txt_coomentC')];
                    aboutus::where('id', 1)->update($newcommentC);
                    break;
          }

          //   Message to Admin
          $eventsdata= wevents::all();
          $blogsdata= blogs::all();

          $data_tobe=['events' => $eventsdata,
               'redirect_f' => '0',
               'blogs' => $blogsdata,
               'operation'=> 'Successfully updated About Us data'
          ];

          // Return to AdminDashboard after Updating
          return view('admin/admindashboard', $data_tobe);
     }

     // 'Contact Us' Edit Functions
     public function contactusdataedit() {
          $cusmd= cusmedia::all();
          return view('admin/dynamic/contactusinsert',['data' => $cusmd]);
     }

     public function updatecontactussdata() {
          switch (request('edit_contactus')) {
               // Update Email Address
               case 'Edit email':
                    $newemail=['CUSMEmail'=>request('txt_email')];
                    cusmedia::where('id', 1)->update($newemail);
                    break;

               // Update Instagram Id.
               case 'Edit instagram id':
                    $newinstagram=['CUSMInstagram'=>request('txt_insta')];
                    cusmedia::where('id', 1)->update($newinstagram);
                    break;

               // Update Phone Number
               case 'Edit phone number':
                    $newphone=['CUSMPhone'=>request('txt_tele')];
                    cusmedia::where('id', 1)->update($newphone);
                    break;

               // Update Twitter Id.
               case 'Edit twitter id':
                    $newtwitter=['CUSMTwitter'=>request('txt_twitter')];
                    cusmedia::where('id', 1)->update($newtwitter);
                    break;
          }

          //   Message to Admin
          $eventsdata= wevents::all();
          $blogsdata= blogs::all();

          $data_tobe=['events' => $eventsdata,
               'redirect_f' => '0',
               'blogs' => $blogsdata,
               'operation'=> 'Successfully updated Contact Us Social Media data'
          ];

          // Return to AdminDashboard after Updating
          return view('admin/admindashboard', $data_tobe);
     }
}
