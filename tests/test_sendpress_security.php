<?php
/**
* Test For SendPress Data
 */
class WP_Test_SendPress_Security extends WP_UnitTestCase {

	function test_html(){
		$sec = new SendPress_Security();
		$html =  "<p style='color:#000;'>red</p>";
		
		$d = $sec->internal_html( $html );
		$this->assertEquals( "<p style='color:#000;'>red</p>", $d);
	}

}