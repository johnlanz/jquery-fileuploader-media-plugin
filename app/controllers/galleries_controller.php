<?php
class GalleriesController extends AppController {

	var $name = 'Galleries';
	var $components = array('RequestHandler');
	
	function index() {
		$this->Gallery->recursive = -1;
		$this->paginate['Gallery'] = array(
			'limit' => 12
		);
		$galleries = $this->paginate('Gallery');
		$this->set(compact('galleries'));
	}

	function add() {
		if (!empty($this->data)) {
			if ($this->Gallery->save($this->data)) {
				$result = '<div id="output">success</div>';
				$result .= '<div id="message">Your Message</div>';
			}else{
				$result = "<div id='output'>failed</div>";
				$result .= '<div id="message">'. $this->Gallery->validationErrors['file'] .'</div>';
			}
			
			$this->RequestHandler->renderAs($this, 'ajax');
			$this->set('result', $result);
			$this->render('../elements/ajax');
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Image', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Gallery->delete($id)) {
			$result = "success";
		}else{
			$result = "failed";
		}
		$this->RequestHandler->renderAs($this, 'ajax');
		$this->set('result', $result);
		$this->render('../elements/ajax');
	}

}
?>