<?php
class IndexController extends \Phalcon\Mvc\Controller
{
  public function indexAction()
  {
    echo __FUNCTION__;
  }

  public function showAction()
  {
    $name = "nguyễn Văn A";
    echo $name;
  }
}