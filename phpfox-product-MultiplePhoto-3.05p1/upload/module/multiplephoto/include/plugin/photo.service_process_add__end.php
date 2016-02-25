<?php

/**
 * Created by Phpfoxthemes.
 * User: Robert
 * Date: 05/09/14
 * Time: 2:29 PM
 */

 if(Phpfox::isModule('photo') && Phpfox::getParam('multiplephoto.add_to_photo_section')) {
	
	if(array_key_exists('type_id', $aVals) && $aVals['type_id'] == 1) {
		$this->database()->update($this->_sTable, array('type_id' => 0), 'photo_id='.$iId);
	}
 }

?>