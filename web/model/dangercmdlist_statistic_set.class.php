<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class dangercmdlist_statistic_set extends base_set {
	protected $table_name = 'dangercmdlistreport_day';
	protected $id_name = 'sid';

}
?>
