<?php

class CustomCookie
{
    static private $_instant = null;
    private $expire = 0;
    private $path = '';
    private $domain = '';
    private $secure = false;
    private $httponly = false;

    private function __construct(array $options = [])
    {
        $this->setOption($options);
    }

    /**
     * 初始化cookie
     * @param array $optionscookie的配置项
     */
    private function setOption(array $options = [])
    {
        if (isset($options['expire'])) {
            $this->expire = (int)$options['expire'];
        }

        if (isset($options['path'])) {
            $this->path = $options['path'];
        }

        if (isset($options['domain'])) {
            $this->domain = $options['domain'];
        }

        if (isset($options['secure'])) {
            $this->secure = (bool)$options['secure'];
        }

        if (isset($options['httponly'])) {
            $this->httponly = (bool)$options['httponly'];
        }
    }

    /**
     * @param array $options cookie选项
     * @return  对象实例
     */
    public static function getInstance(array $options = [])
    {
        if (is_null(self::$_instant)) {
            $class = __CLASS__;
            self::$_instant = new $class($options);
        }
        return self::$_instant;
    }

    public function set($name, $value, array $options = [])
    {
        if (is_array($options) && count($options) > 0) {
            $this->setOption($options);
        }

        if (is_array($value) || is_object($value)) {
            $value = json_encode($value);
        }

        setcookie($name, $value, $this->expire, $this->path, $this->domain, $this->secure, $this->httponly);
    }

    public function get($name)
    {
        if(isset($_COOKIE[$name])){
            substr($_COOKIE[$name],0,1)=='{'?json_decode($_COOKIE[$name]):$_COOKIE[$name];
        }else{
            return null;
        }
    }

    public function remove($name,array $options=[])
    {
        if(is_array($options) && count($options)>0){
           $this->setOption($options);
        }
        if(!empty($_COOKIE)){
           setcookie($name.'',time()-1,$this->path,$this->domain,$this->secure,$this->httponly);
        }
    }
}