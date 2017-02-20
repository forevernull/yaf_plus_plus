<?php
class IndexAction extends Yaf_Action_Abstract {
    public function execute() {
        $mIndex = new IndexModel();
        print_r($mIndex->getIndex());
    }
}
