<?php

namespace App\Helpers;

class JsonHelper {

  /**
   * Creates a successful json response with given data
   *
   * @param mixed
   * @return string
   */
  public static function success($data) {
    return response()->json(['status'=>'success', 'message'=>'', 'data'=>$data], 200);
  }

  /**
   * Creates an error json response with given message
   *
   * @param string
   * @return string
   */
  public static function error($message) {
    return response()->json(['status'=>'error', 'message'=>$message, 'data'=>''], 200);
  }
}