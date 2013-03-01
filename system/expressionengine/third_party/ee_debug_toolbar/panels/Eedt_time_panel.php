<?php
/**
 * Time Panel
 *
 * @author Christopher Imrie
 */
require_once PATH_THIRD . "ee_debug_toolbar/classes/Eedt_base_panel.php";

class Eedt_time_panel extends Eedt_base_panel
{
	protected $name = "time";

	public function __construct()
	{
		parent::__construct();
		$this->button_label = $this->EE->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end').'s';
	}	
}
