<?php

/**
 * dojo rte module initialisation
 */
class DojorteModule implements Knowledgeroot_Module_Interface {
	/**
	 * return dojo rte config path
	 */
	public function getConfigPath() {
		return __DIR__ . '/config/module.ini';
	}
}
