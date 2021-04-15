<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\wevents;
use App\blogs;
use Session;
use App\userparticipated;
class DashboardController extends Controller
{
    public function userdashboard(){

    }

    public function admindashboard(){
      $eventsdata= wevents::all();
      $blogsdata= blogs::all();

      $data_tobe=['events' => $eventsdata,
                  'redirect_f' => '0',
                  'blogs' => $blogsdata,
                  'operation'=> ''
                ];

      return view('admin/admindashboard', $data_tobe);
    }

    public function redirect_editevent(){

      $id=  request('event_choice');

      switch (request('edit_event')) {
        case 'Edit Event':
          $eventdetails = wevents::where('Eventid', $id)->get();
          $sendata= ['eventdata' => $eventdetails];
          return view('admin/editevent', $sendata);
          // code...
          break;
        case 'Delete Event':
            // code...
            wevents::where('Eventid', $id)->delete();
            $eventsdata= wevents::all();
            $blogsdata= blogs::all();
            $data_tobe=['events' => $eventsdata,
                        'redirect_f' => '0',
                        'blogs' => $blogsdata,
                        'operation'=> 'Event Succesfully Deleted'

                      ];
            error_log('updated');
            return view('admin/admindashboard', $data_tobe);
            break;
        case 'Add Event':
              // code...
               return view('admin/addevent');
              break;

      }

    }

    public function update_event(){
      $event= new wevents();
      $id=  request('event_hidden_id');
      $newdata=['Ename' => request('event_namee') ,
                'Edescription' => request('event_description'),
                'Edate'=> request('event_date')];
      wevents::where('Eventid', $id)->update($newdata);


      $eventsdata= wevents::all();
      $blogsdata= blogs::all();
      $data_tobe=['events' => $eventsdata,
                  'redirect_f' => '0',
                  'blogs' => $blogsdata,
                  'operation'=> 'Event Succesfully Updated'

                ];
      error_log('updated');
      return view('admin/admindashboard', $data_tobe);
    }

    public function redirect_editblog(){

      $id=  request('blog_choice');

       switch (request('edit_blog')) {
         case 'Edit Blog':
                            $eventdetails = blogs::where('Bid', $id)->get();
                            $sendata= ['blogdata' => $eventdetails];
                            return view('admin/editblog', $sendata);
                            break;
        case  'Delete Blog': blogs::where('Bid', $id)->delete();
                              $eventsdata= wevents::all();
                              $blogsdata= blogs::all();

                              $data_tobe=['events' => $eventsdata,
                              'redirect_f' => '0',
                              'blogs' => $blogsdata,
                              'operation'=> 'Blog Succesfully Deleted'
                              ];
                              error_log('deleted');
                              return view('admin/admindashboard', $data_tobe);
                              break;

       case 'Add Blog':     return view('admin/addblog');
                            break;

                      }
    }


    public function update_blog(){

      $id=  request('blog_hidden_id');
      $newdata=['Bname' => request('blog_namee') ,
                'Bcontent' => request('blog_description'),
                'Bdate'=> request('blog_date')];
      blogs::where('Bid', $id)->update($newdata);


      $eventsdata= wevents::all();
      $blogsdata= blogs::all();

      $data_tobe=['events' => $eventsdata,
                  'redirect_f' => '0',
                  'blogs' => $blogsdata,
                  'operation'=> 'Blog Succesfully Updated'

                ];
      error_log('updated');
      return view('admin/admindashboard', $data_tobe);
    }

    public function insertblog(){
      $blog= new blogs();
      $blog->Bname = request('blog_namee');
      $blog->Bcontent = request('blog_description');
      $blog->Bdate = request('blog_date');
      $blog->save();

      $eventsdata= wevents::all();
      $blogsdata= blogs::all();
      $data_tobe=['events' => $eventsdata,
                  'redirect_f' => '0',
                  'blogs' => $blogsdata,
                  'operation'=> 'Blog Succesfully Added'

                ];
      error_log('added');
      return view('admin/admindashboard', $data_tobe);

    }

    public function insertevent(){
      $event= new wevents();
      $event->Ename = request('event_namee');
      $event->Edescription = request('event_description');
      $event->Edate = request('event_date');
      $event->Eclosedflag = 1;
      $event->save();

      $eventsdata= wevents::all();
      $blogsdata= blogs::all();
      $data_tobe=['events' => $eventsdata,
                  'redirect_f' => '0',
                  'blogs' => $blogsdata,
                  'operation'=> 'Event Succesfully Added'

                ];
      error_log('added');
      return view('admin/admindashboard', $data_tobe);

    }
    public function regiterforevent(){
      $participated = new userparticipated();
      $id=  request('event_choice');
      $participated->up_userid = Session::get('currentuser')->id;
      $participated->up_eid = $id;
      $participated->save();
        $event= wevents::all();
      return view('users/userdashboard', ['event' => $event,'operation'=> 'Event Succesfully Registered.' ]);

    }

}
