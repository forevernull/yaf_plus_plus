<?php
class IndexAction extends Yaf_Action_Abstract {
    public function execute() {
        $mIndex = new IndexModel();
        $this->getView()->assign('name', $mIndex->getIndex());
    }
}
