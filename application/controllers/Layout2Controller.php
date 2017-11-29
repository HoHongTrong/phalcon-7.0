<?php
class Layout2Controller extends \Phalcon\Mvc\Controller
{
  public function index1Action()
  {
    echo __FILE__;
  }
  public function index2Action(){
    echo __FUNCTION__;
  }
}