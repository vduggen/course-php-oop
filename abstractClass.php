<?php

abstract class queries {
  public abstract function get($id);
  public abstract function post($data);
  public abstract function update($id, $data);
  public abstract function delete($id);
}

class Clients extends queries {
  public $table = [];

  public function get($id = -1) {
    
    if ($id == -1) {

      return $this->table;

    } else {

      return $this->table[$id];

    }

  }

  public function post($data) {

    if (Count($data) === 1) {
      
      $id = rand();

      $this->table[$id] = json_encode($data);

    } else {

      for ($i = 0; $i < Count($data); $i++) {

        $id = rand();

        $this->table[$id] = json_encode($data[$i]);

      }

    }

    return $this->table;
  }

  public function update($id, $data) {

    for ($i = 0; $i < Count($this->table); $i++) {
      
      if ($this->table[$i]['id'] == $id) {

        $index = array_search($this->table[$i], $this->table);

        var_dump(array_replace($this->table, $data));

      }

    }

  }

  public function delete($id) {}
}

$instanceClients = new Clients();

$raw = array(
  'name' => 'Vitor Luiz Duggen',
);

$raw2 = array(
  'name' => 'Vitor Luiz Duggen',
);

$resultPost = $instanceClients->post(array($raw, $raw2));

var_dump($resultPost);