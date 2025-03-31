<?php

class Writer extends Model
{

  public function all()
  {
    return $this->selectAll("writers");
  }
}
