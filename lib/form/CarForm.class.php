<?php

/**
 * Car form.
 *
 * @package    car
 * @subpackage form
 * @author     Your name here
 */
class CarForm extends BaseCarForm
{
  public function configure()
  {
  	//Im not sure about hidden this fields.
  	unset($this['created_at'], $this['updated_at']);
  }
    
}
