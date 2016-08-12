<?php

namespace App\Helpers;

use DB;

/**
 * Offers an interface to sitewide settings or other useful functions
 */
class SiteHelper {
  /**
   * Returns a setting by key
   *
   * @param mixed
   * @return string
   */
  public static function getOption($key) {
    return DB::table('site_options')
              ->where('key', $key)
              ->first();
  }

  /**
   * Updates a setting by key
   *
   * @param mixed
   */
  public static function setOption($key, $value) {
    // TODO
  }

}