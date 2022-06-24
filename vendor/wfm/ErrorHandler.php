<?php

namespace wfm;

class ErrorHandler
{
  public function __construct()
  {
    if (DEBUG) {
      error_reporting(-1);
    } else {
      error_reporting(0);
    }
  }
}
