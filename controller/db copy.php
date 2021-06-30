<?php 
    class DB {

        private static $writeDBConnection;
        private static $readDBConnection;

        public static function connectWriteDB() {
            if (self::$writeDBConnection == null) {
                self::$writeDBConnection = new PDO('mysql:host=sql208.epizy.com;dbname=epiz_29009127_tasksdb;charset=utf8', 'epiz_29009127', 'shreyash@2908');
                self::$writeDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$writeDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }

            return self::$writeDBConnection;
        }

        public static function connectReadDB() {
            if (self::$readDBConnection == null) {
                self::$readDBConnection = new PDO('mysql:host=sql208.epizy.com;dbname=epiz_29009127_tasksdb;charset=utf8', 'epiz_29009127', 'shreyash@2908');
                self::$readDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$readDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }

            return self::$readDBConnection;
        }

    }
?>