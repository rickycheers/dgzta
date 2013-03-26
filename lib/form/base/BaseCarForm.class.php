<?php

/**
 * Car form base class.
 *
 * @method Car getObject() Returns the current form's model object
 *
 * @package    car
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCarForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => false)),
      'brand'      => new sfWidgetFormInputText(),
      'model'      => new sfWidgetFormInputText(),
      'color'      => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'mileage'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'user_id'    => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'id')),
      'brand'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'model'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'color'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'status'     => new sfValidatorString(array('required' => false)),
      'mileage'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('car[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Car';
  }


}
