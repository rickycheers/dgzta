<?php

/**
 * User form.
 *
 * @package    car
 * @subpackage form
 * @author     Your name here
 */
class UserForm extends BaseUserForm
{
  public function configure()
  {
  	//Im not sure about hidden this fields.
  	unset($this['created_at'], $this['updated_at']);
  }
    protected function doSave($con = null) {
        $user = new User;
        if (is_null($con)) {
            $con = $this->getConnection();
        }
        if ($this->object->isNew()) :
            $user->setCreatedAt(time());
            $user->setUpdatedAt(null);
            $user->save();
        else:
			$user->setUpdatedAt(time());
        endif;
        parent::doSave($con);
  }
}
