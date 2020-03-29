<?php

namespace App\Format;

class BaseFormat {
  protected $data;

  public function __construct($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setData($data)
  {
    $this->data = $data;
  }
}
