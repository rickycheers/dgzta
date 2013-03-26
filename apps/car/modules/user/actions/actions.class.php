<?php

/**
 * user actions.
 *
 * @package    car
 * @subpackage user
 * @author     Your name here
 */
class userActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Users = UserPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->User = UserPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->User);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UserForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($User = UserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object User does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserForm($User);

  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($User = UserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object User does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserForm($User);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($User = UserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object User does not exist (%s).', $request->getParameter('id')));
    $User->delete();

    $this->redirect('user/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $User = $form->save();

      $this->redirect('user/edit?id='.$User->getId());
    }
  }
}
