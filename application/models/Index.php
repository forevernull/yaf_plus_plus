<?php
class IndexModel{
    public function getIndex(){
        /*
        $db = DB::connect("mysqli://example:example@127.0.0.1/test");
        if (PEAR::isError($db)) {
            die($db->getMessage());
        }
        $db->query("set names utf8");
        $data = $db->getAll('SELECT * from books');
        return json_encode($data);
         */
        return "OK";
    }
}
