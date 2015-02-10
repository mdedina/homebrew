<?php

class Homebrew extends CI_Model {

	function admin_login($post)
	{

		$arguments = array($post['adminemail'], $post['adminpassword']);

		$result = $this->db->query("SELECT * FROM people WHERE email = ? AND password = ? AND admin_bool=1", $arguments)->result_array();

		if (empty($result)) {
			//echo "result not set";
			return 0;
		} else {
			//echo "result is set, so we can set to zero";
			return $result[0]['id'];
		}

	}
	
}