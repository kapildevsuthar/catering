<?php
class Session{
    static function init(){
        @session_start();
    }
    static function set($key,$value){
        $_SESSION[$key]=$value;
    }
    static function get($key){
       return $_SESSION[$key]?? null;
    }
    
    static function delete($key){
       if (isset( $_SESSION[$key])){
        unset($_SESSION[$key]);
       }
    }
    
    public function destroy()
        {
        @session_destroy();
       }
    public function sessionId(){
        return session_id();
    }
    
}
