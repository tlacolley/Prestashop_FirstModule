<?php
// global $smarty;
// include('../../config/config.inc.php');
// include('../../header.php');
 
// $smarty->display(dirname(__FILE__).'/display.tpl');
 
// include('../../footer.php');

class mymoduledisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:mymodule/views/templates/front/display.tpl');
  }
}

