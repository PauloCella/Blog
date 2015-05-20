<?php
/**
*
 * @author Paulo Cella <paulocella@unochapeco.edu.br>
 * 
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class usuariosController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
	
    public function saveAction()
	{
		return new ViewModel();
	}		

	public function deleteAction()
	{

	}
}
