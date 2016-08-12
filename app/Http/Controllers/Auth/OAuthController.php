<?php

namespace App\Http\Controllers\Auth;

use Notification;
use App\User;
use Validator;
use OAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class OAuthController extends Controller
{
  /**
   * Handles Facebook authentication
   *  
   * @param Illuminate\Http\Request
   * @return Illuminate\Http\Response
   */
  public function facebook(Request $request) {
    
    // get data from request
    $code = $request->get('code');

    $fb = \OAuth::consumer('Facebook');

    // if code is provided get user data and sign in
    if ( ! is_null($code)) {
      // This was a callback request from facebook, get the token
      $token = $fb->requestAccessToken($code);

      // Send a request with it
      $result = json_decode($fb->request('/me?fields=id,name,email'), true);

      $user = User::where('facebook_id', $result['id'])->first();
      if(!$user) {
        // We must create a new user
        $user = new User();
        $user->name = $result['name'];
        $user->email = $result['email'];
        $user->password = bcrypt(str_random(10));
        $user->confirmed = 1;
        $user->facebook_id = $result['id'];
        $user->admin = 0;
        $user->username = $result['email'];
        $user->save();
        Auth::login($user);

        Notification::success("Welcome!");
        return redirect()->to('/events');
      }
      else {
        // Login the user
        Auth::login($user);

        Notification::success("Welcome back!");
        return redirect()->to('/events');
      }

    }
    // if not ask for permission first
    else {
      // get fb authorization
      $url = $fb->getAuthorizationUri();

      // return to facebook login url
      return redirect((string)$url);
    }
  }


}