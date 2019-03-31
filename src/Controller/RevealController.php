<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * 
 */
class RevealController extends AppController{
 public $base_url;
	public function initialize()
	{
		$this->base_url= Router::url('/',true);
		parent::initialize();
		$this->viewBuilder()->setLayout("Reveal");
	}
	public function index()
	{
		$this->set('baseurl',"$this->base_url");

		}
	}


?>