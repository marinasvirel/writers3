<?php

class Model extends DB
{
  // CRUD

  public function selectAll($table)
  {
    $link = $this->link();
    $query = "SELECT * FROM `$table`";
    $res = mysqli_query($link, $query);
    for ($writers = []; $row = mysqli_fetch_assoc($res); $writers[] = $row);
    return $writers;
  }
}
