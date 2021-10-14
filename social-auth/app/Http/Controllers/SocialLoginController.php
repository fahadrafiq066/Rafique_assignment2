<?php

namespace App\Http\Controllers;

use App\Models\Patient1;
use App\Models\Patient2;
use App\Models\Patient3;
use App\Models\Patient4;
use App\Models\Patient5;
use App\Models\Patient6;
use Redirect;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{

    //This method redirect to Github for authentication
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    //When we click authenticate button on github, then we will be redirected at here
    //Here we will get user data of Github
    public function handleGithubCallback(){
        $user = Socialite::driver('github')->stateless()->user();
        User::updateOrCreate(['email'=>$user->email],
        ['name' => $user->name,
        'login_platform' => 'github'  ,
        'platform_id' => $user->id,
        'loggedInUserStatus' => 'login'
        ]
    );
        $url = "http://localhost:8080/login/". $user->id;
        return redirect()->away($url);
    }

    //This method redirect to google for authentication
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    
    //When we click authenticate button on google, then we will be redirected at here
    //Here we will get user data of google
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->stateless()->user();
        User::updateOrCreate(['email'=>$user->email],
        ['name' => $user->name,
        'login_platform' => 'google',
        'platform_id' => $user->id,
        'loggedInUserStatus' => 'login'
        ]
    );
    $url = "http://localhost:8080/login/". $user->id;
    return redirect()->away($url);
    }


    //This method redirect to Facebook for authentication
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    //When we click authenticate button on facebook, then we will be redirected at here
    //Here we will get user data of facebook
    public function handleFacebookCallback(){
        $user = Socialite::driver('facebook')->stateless()->user();
        if($user->email == null){
            $user->email = (string)$user->id . '@gmail.com';
                }
        User::updateOrCreate(['email'=>$user->email],
        ['name' => $user->name,
        'login_platform' => 'facebook',
        'platform_id' => $user->id,
        'loggedInUserStatus' => 'login' 
        ]
    );
    $url = "http://localhost:8080/login/". $user->id;
    return redirect()->away($url);
    }

    public function updateUser(Request $request){
        $user = User::where("platform_id",$request->platform_id)->first();
        if($user != []){
            $user->password = $request->password;
            $user->loggedInUserRole = $request->loggedInUserRole;
            $user->save();
            return response("User info updated",200);
        }
    }

    public function Login(Request $request){
        $user = User::where("email",$request->email)->first();
        if($user != null && $user->password == $request->password){
            if($user->loggedInUserRole == 'Patient'){
            $url = "http://localhost:8080/viewPatientData";
            }
            else{
            $url = "http://localhost:8080/viewResearchVideos";

            }
            $user->loggedInUserStatus ='login';
            $user->login_platform = "custom";
            $user->save();
            return redirect()->away($url);
        }
        else{
            return Redirect::back()->withErrors(['msg' => 'Wrong credentials']);
        }
    }

    public function logout(Request $request){
        $user = User::where("platform_id",$request->platform_id)->first();
        if($user != []){
            $user->loggedInUserStatus = 'logged out';
            $user->save();
            return response("User info updated",200);
        }
    }

    public function getFirstPatientData(){
        $patient1 = Patient1::all();
        return $patient1;
    }
    public function getSecondPatientData(){
        $patient2 = Patient2::all();
        return $patient2;
    }
    public function getThirdPatientData(){
        $patient3 = Patient3::all();
        return $patient3;
    }
    public function getFourthPatientData(){
        $patient4 = Patient4::all();
        return $patient4;
    }
    public function getFifthPatientData(){
        $patient5 = Patient5::all();
        return $patient5;
    }
    public function getSixthPatientData(){
        $patient6 = Patient6::all();
        return $patient6;
    }

}
