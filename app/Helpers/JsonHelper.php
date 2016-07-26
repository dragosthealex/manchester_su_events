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
    return json_encode(['status'=>'success', 'message'=>'', 'data'=>$data]);
  }

  /**
   * Creates an error json response with given message
   *
   * @param string
   * @return string
   */
  public static function error($message) {
    return json_encode(['status'=>'error', 'message'=>$message, 'data'=>'']);
  }
}