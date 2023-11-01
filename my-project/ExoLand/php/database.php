<?php
    session_start();
    class db {

        private static $host = "localhost";
        private static $port = 3306;
        private static $name = "exoland";
        private static $db_usr = "root";
        private static $db_psw = "";
        private static $charset = "utf8";

        public static $db = null;
        public static $rs = null;
        public static $qr = "";

        private static function getDb() {
            if(!self::$db) {
                self::$db = new PDO (
                    "mysql:host=" . self::$host . ";
                    port=" . self::$port . ";
                    dbname=" . self::$name . ";
                    charset=" . self::$charset,
                    self::$db_usr,
                    self::$db_psw
                );
            }
            return self::$db;
        }

        public static function set($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            return self::$rs->execute((array)$pr);
        }

        public static function getAll($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
            return self::$rs->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function add($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr) ? self::getDb()->lastInsertId() : 0;
        }

        public static function getRowS($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
            return self::$rs->fetch(PDO::FETCH_ASSOC);
        }

        public static function getRow($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
            return self::$rs->fetch(PDO::FETCH_OBJ);
        }

        public static function getColumn($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
            return self::$rs->fetchAll(PDO::FETCH_COLUMN);
        }

        public static function getRowCount($qr, $pr = array()) {
            $rs = self::getDb()->prepare($qr);
            $rs->execute((array)$pr);
            return $rs;
        }

        public static function rowCount($qr, $pr = array()) {
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
            return self::$rs->rowCount();
        }
        
        public static function getId($qr, $pr = array(), $df = null) {
	        self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
            $id = self::$rs->fetch(PDO::FETCH_NUM)[0];
            if ($id) {
                return $id;
            } else {
                if ($df) {
                    return $df;
                } else {
                    return null;
                }
            }
	    }

        public static function getNews($qr, $pr = array()){
            self::$rs = self::getDb()->prepare($qr);
            self::$rs->execute((array)$pr);
        }
    }

    function checkAuth() {
        $token = @$_SESSION["token"];
        $session = session_id();
        $qr = "SELECT * FROM tokens WHERE token = :token AND session_id = :session AND token_expiration > now()";
        $pr = array(
            "token" => $token,
            "session" => $session
        );
        $count = db::rowCount($qr, $pr);
        if($count) {
            $qr = "UPDATE tokens SET token_expiration = DATE_ADD(now(), INTERVAL 60 MINUTE) WHERE token = :token AND session_id = :session";
            $pr = array(
                "token" => $token,
                "session" => $session
            );
            db::add($qr, $pr);
            return true;
        } else {
            return false;
        }
    }

    function genRandomString($length = 8) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charsLength = strlen($chars);
        $randomString = "";
        for($i = 0; $i < $length; $i++) {
            $randomString .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomString;
    }
    
    function createToken($id_user) {
        $token = genRandomString(32);
        $_SESSION["token"] = $token;
        $session = session_id();
        $qr = "INSERT INTO tokens (id_user, token, session_id, token_expiration) VALUES (:user, :token, :session, DATE_ADD(now(), INTERVAL 60 MINUTE))";
        $pr = array(
            "user" => $id_user,
            "token" => $token,
            "session" => $session
        );
        db::add($qr, $pr);
    } 

    function delete_all_between($beginning, $end, $string) {
        $beginningPos = strpos($string, $beginning);
        $endPos = strpos($string, $end);
        if ($beginningPos === false || $endPos === false) {
          return $string;
        }
      
        $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);
      
        return delete_all_between($beginning, $end, str_replace($textToDelete, '', $string));
    }

    function getNews($id) {
        $qr = "SELECT * FROM news JOIN users ON news.id_user = users.id_user WHERE id_news = :id";
        $pr = array(
            "id" => $id
        );
        $news = db::getRow($qr, $pr);
        return $news;
    }

    function getUser(){
        
    }
?>