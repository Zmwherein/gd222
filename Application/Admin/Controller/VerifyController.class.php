<?php
namespace Admin\Controller;
use Think\Controller;
class VerifyController extends Controller {
    public function verify(){
		$config = array(
			'fontSize' => 30,
			'length'   => 4,
			// 'useImgBg' => FALSE,
			'useCurve' => true,
			'codeSet'  => '0123456789abcdefghijklmnopqrstuvwxyz',
		);
		
		$Verify = new \Think\Verify($config);
		// $Verify->fontttf = '5.ttf';
		// $Verify->useZh = true;
		ob_clean();
		
		$Verify->entry();
    }
}