<?php
class ControllerCommonFooterAshvira extends Controller {
	public function index() {
		$this->load->language('common/footer');

		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$data['text_version'] = sprintf($this->language->get('text_version'), VERSION);
			$data['user_token'] = $this->session->data['user_token'];
		} else {
			$data['text_version'] = '';
		}

		return $this->load->view('common/footer_ashvira', $data);
	}
}
