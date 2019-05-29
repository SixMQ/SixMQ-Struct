<?php
namespace SixMQ\Struct\Queue\Client\Auth;

use SixMQ\Struct\BaseClientStruct;

class Login extends BaseClientStruct
{
    /**
     * 用户名
     *
     * @var string
     */
    public $username;

    /**
     * 密码
     *
     * @var string
     */
    public $password;
	
    public function __construct($username, $password)
    {
        $this->action = 'auth.login';
        $this->username = $username;
        $this->password = $password;
	}
	
}