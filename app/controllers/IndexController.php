<?php

class IndexController extends BaseController {

    public function indexAction() {

    	//$data = $this->db->query("SELECT * FROM `ofo_password` LIMIT 50")->fetchAll(PDO::FETCH_ASSOC);

    	//$this->log_info(json_encode($data));

    	//$rsa = new RSA();

    	//this->log_info($rsa->encryptRSA("陈龙科",$this->config->RSA_PUBLIC_KEY));
        //$this->log_info($this->redis->get('clk'));
    	$this->view->region = json_decode($this->getLocationAction(),true);
    	$this->view->title = "登录";    	
    	$this->view->index = $this->getip();
    	//$this->view->render('index','login')->finish();
        $this->view->pick("index/login");
    }

    public function NotFoundAction(){
    	die("找不到页面");
    }
}