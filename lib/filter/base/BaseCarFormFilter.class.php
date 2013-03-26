<?php

/**
 * Car filter form base class.
 *
 * @package    car
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCarFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'brand'      => new sfWidgetFormFilterInput(),
      'model'      => new sfWidgetFormFilterInput(),
      'color'      => new sfWidgetFormFilterInput(),
      'status'     => new sfWidgetFormFilterInput(),
      'mileage'    => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'brand'      => new sfValidatorPass(array('required' => false)),
      'model'      => new sfValidatorPass(array('required' => false)),
      'color'      => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'mileage'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('car_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Car';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'user_id'    => 'ForeignKey',
      'brand'      => 'Text',
      'model'      => 'Text',
      'color'      => 'Text',
      'status'     => 'Text',
      'mileage'    => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
