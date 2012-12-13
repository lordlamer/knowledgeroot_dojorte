<?php

/**
 * module bootstrap
 */
class DojorteBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initDojorte() {
	// init dojo rte
	$rte = new Dojorte();

	// save dojo rte as default editor
	Knowledgeroot_Registry::set('rte', $rte);
    }
}
