<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aboutus;
use App\our_values;
use App\datacontactus;
use App\team;

class DynamicdataController extends Controller
{
    //
    public function aboutus(){
      $dataaboutus = aboutus::all();
      $calidad= our_values::where('valueid', '1')->get();
      $coherencia= our_values::where('valueid', '2')->get();
      $compromiso= our_values::where('valueid', '4')->get();
      $confianza= our_values::where('valueid', '5')->get();
      $cooperacion= our_values::where('valueid', '6')->get();
      $transparencia= our_values::where('valueid', '7')->get();

      $finaldata =['data'  => $dataaboutus,
      'calidad' => $calidad,
      'coherencia' =>$coherencia,
      'compromiso' =>$compromiso,
      'confianza' =>$confianza,
      'cooperacion' =>$cooperacion,
      'transparencia' =>$transparencia
    ];
      return view('Aboutus', $finaldata);
    }

    public function team(){
      $restoftheteam = team::where('TFlag', '0')->get();
      $directionteam = team::where('TFlag', '1')->get();
      $send= ['direction' => $directionteam,
              'restteam' => $restoftheteam
            ];
      return view('Team', $send);
    }

    public function contactus(){
      $dataemail  = datacontactus::where('social_website' , 'email')->get();
      $datainsta  = datacontactus::where('social_website' , 'instagram')->get();
      $datatelephone  = datacontactus::where('social_website' , 'telephone')->get();
      $datatwitter  = datacontactus::where('social_website' , 'twitter')->get();
      $senddata=['email' => $dataemail,
                 'instagram' => $datainsta,
                 'telephone' => $datatelephone,
                  'twitter' => $datatwitter
                ];
      return view('contactus', $senddata);
    }
}
