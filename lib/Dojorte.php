<?php

class Dojorte extends Knowledgeroot_Rte_Abstract {
	/**
	 * show editor with content
	 *
	 * @param string $content
	 */
	public function show($content = null) {
	    if($content != null)
		$this->content = (string) $content;

	    $res = '
		    <script type="text/javascript">
			require(["dojo/ready", "dijit/Editor", "dijit/_editor/plugins/AlwaysShowToolbar", "dojo/dom", "dojo/query"], function(ready, Editor, AlwaysShowToolbar, dom, query){
			    new Editor({
				height: \'250px\',
				extraPlugins: [AlwaysShowToolbar]
			    }, dom.byId(\''.$this->name.'\'));
			});
		    </script>
	    ';
	    $res .= '
		<textarea id="'.$this->name.'" name="'.$this->name.'">'.$this->content.'</textarea>
	    ';

	    return $res;
	}
}