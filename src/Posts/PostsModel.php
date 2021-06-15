<?php
namespace App\Posts;

use ArrayAccess;

class PostsModel implements ArrayAccess{
    public $id;
    public $title;
    public $model; 
    public $offset; 

    public function offsetExists ($offset ) {
        return isset($this->offset);
        }
    
    public function offsetGet ($offset) {
        return $this->offset;
    }
    public function offsetSet ($offset,$value) {
        $this->offset=$value;
    } 
    public function offsetUnset ($offset) {
        unset($this->offset);
    } 
    



}