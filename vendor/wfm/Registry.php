<?php

namespace wfm;

class Regidtry
{
  use TSingleton;

  protected static array $properties = [];

  public function setProperty($name, $value)
  {
    self::$properties[$name] = $value;
  }

  public function getProperty($name)
  {
    return self::$properties[$name] ?? null;
  }

}
