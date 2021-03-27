<?php

namespace App\Controllers;


class Home extends BaseController
{
	public function __construct()
	{
		helper(['form', 'url']);
		$this->form_validation = \Config\Services::validation();
		$this->email = \Config\Services::email();
	}
	public function index()
	{
		$data = [
			"title" => "Beranda",
			"id" => 1
		];
		return view('page/index', $data);
	}
	public function about()
	{
		$data = [
			"title" => "About",
			"id" => 2
		];
		return view('page/about', $data);
	}
	public function portfolio()
	{
		$data = [
			"title" => "Portfolio",
			"id" => 3
		];
		return view('page/portfolio', $data);
	}
	public function contact()
	{
		$data = [
			"title" => "Contact Me",
			"id" => 4,
			'validation' => $this->form_validation,
		];
		if (!empty($this->request->getPost('submit'))) {
			$contactEmail = $this->validate([
				'name' => 'required',
				'email' => 'required|valid_email|valid_emails',
				'subject' => 'required',
				'message' => 'required',
			]);

			if (!$contactEmail) {
				return redirect()->to('/contact')->withInput()->with('validation', $this->form_validation);
			} else {
				$UserAgent = $this->request->getUserAgent();
				if ($UserAgent->isBrowser()) {
					$currentAgent = $UserAgent->getBrowser() . ' ' . $UserAgent->getVersion();
				} elseif ($UserAgent->isRobot()) {
					$currentAgent = $this->agent->robot();
				} elseif ($UserAgent->isMobile()) {
					$currentAgent = $UserAgent->getMobile();
				} else {
					$currentAgent = 'Unidentified User Agent';
				}
				
				$message = "[ Email Pengirim : " . $this->request->getPost('email') . ", IP Address : " . $this->request->getIpAddress() . ", Platform : " . $UserAgent->getPlatform() . ",Browser : " . $currentAgent . " ] ~ " . $this->request->getPost('message');
				$this->email->setTo('riyan.clsg11@gmail.com');
				$this->email->setFrom($this->request->getPost('email'), "From [ " .$this->request->getPost('name')." ]");
				$this->email->setSubject($this->request->getPost('subject'));
				$this->email->setMessage($message);
				if($this->email->send()){
					session()->setFlashdata('berhasil', 'Email Sent Successfully ');
					return redirect()->to('/contact');
				}else{
					// $errors = $this->email->printDebugger(['headers']);
					// print_r($errors);
					session()->setFlashdata('gagal', '500 - Internal Server Error');
					return redirect()->to('/contact');
				}
			}
		} else {
			return view('page/contact', $data);
		}
	}
	public function download(){
		return $this->response->download('img/cv/deyan-ardi.png', null);
	}
}