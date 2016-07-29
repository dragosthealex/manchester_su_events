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
    return response()->json(200, ['status'=>'success', 'message'=>'', 'data'=>$data]);
  }

  /**
   * Creates an error json response with given message
   *
   * @param string
   * @return string
   */
  public static function error($message) {
    return response()->json(200, ['status'=>'error', 'message'=>$message, 'data'=>'']);
  }
}