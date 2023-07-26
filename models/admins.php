<?php
	require_once("base.php");

	class Admins extends Base {
		public function getAdmin($username){
			$query = $this->db->prepare("
			SELECT admin_id, password
			FROM admins
			WHERE username = ?
			");

			$query->execute([
				$username
			]);

			return $query->fetch();
		}

	}
?>