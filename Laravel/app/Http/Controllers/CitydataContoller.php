<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\home;
use App\our_values;
use App\contactus;
use App\user;
use Validator;
use Auth;
use Session;
use App\users;
use App\wevents;
use App\blogs;

class CitydataContoller extends Controller
{
    public function home_data(){

        $variable1= home::all();
        $calidad= our_values::where('valueid', '1')->get();
        $coherencia= our_values::where('valueid', '2')->get();
        $compromiso= our_values::where('valueid', '4')->get();
        $confianza= our_values::where('valueid', '5')->get();
        $cooperacion= our_values::where('valueid', '6')->get();
        $transparencia= our_values::where('valueid', '7')->get();

        $final=['data' => $variable1,
                'calidad' => $calidad,
                'coherencia' =>$coherencia,
                'compromiso' =>$compromiso,
                'confianza' =>$confianza,
                'cooperacion' =>$cooperacion,
                'transparencia' =>$transparencia
              ];
        return view('Home', $final  );
    }

    public function store_contact(){
        $contact_email = new contactus();
        $contact_email->c_email = request('form_footer_contact_email');
        $contact_email->save();
      return redirect('/home');
    }

    public function register_user(){
        $new_user = new user();
        $new_user->email=request('register_email');
        $new_user->password=request('register_password');
        $new_user->name=request('register_name');
        $new_user->phoneno=request('register_tel');
        $new_user->city=request('register_city');

        $new_user->save();



      return redirect('/home');
    }

    public function logout(){
      Session::flush();
    return  redirect('/home');
    }

    public function contact_us_full(){
      $contact_email = new contactus();
      $contact_email->c_name = request('contact_us_name');
      $contact_email->c_email = request('contact_us_email');
      $contact_email->c_affair = request('contact_us_asunto');
      $contact_email->c_affair_desc = request('contactus_textarea');
      $contact_email->save();


        return  redirect('/contactus');
    }


    public function checklogin(Request $request){

      $user_data = array(
        'email' => request('login_frm_email'),
        'password' => request('login_frm_password')
        );

          $userdata=user::where( $user_data)->get();
          $c= $userdata->count();
          if($c==1)
          {
            $type='';
            foreach ($userdata as $key) {
            // code...
              $type= $key->flag;
              $sesionadta=[];
              Session::put('currentuser',$key);
            }

            if ($type == 0) {
              //he is admin
                  $eventsdata= wevents::all();
                  $blogsdata= blogs::all();

                  $data_tobe=['events' => $eventsdata,
                            'redirect_f' => '0',
                            'blogs' => $blogsdata,
                            'operation'=> ''
                          ];
                return view('admin/admindashboard', $data_tobe);
            }
            elseif ($type==1) {
              //he is users
              $event= wevents::all();
              error_log(Session::get('currentuser'));
              return view('users/userdashboard', ['event' => $event, 'operation'=> '']);

            }


          }else{
            error_log("fail");
            return back()->with('error', 'Wrong login details');
          }


    }
}
