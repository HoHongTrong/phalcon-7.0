<?php
class ControlController extends Phalcon\Mvc\Controller
{
  public function initialize(){
    echo "<div>".__FUNCTION__."</div>";
  }

  public function indexAction($name)
  {
    echo "hello: ".$name;
  }
  public function index1Action($name = 'trtrtr')
  {
    echo "hello :".$name;
  }
  public function index2Action($name,$age,$coler)
  {
    echo "hello :".$name;
    echo "<br>tuoi :".$age;
    echo "<br>màu :".$age;
  }
  public function index3Action()
  {
    echo __FUNCTION__;
  }
}