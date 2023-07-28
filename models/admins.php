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

		public function getAdminsList(){
			$query = $this->db->prepare("
				SELECT *
				FROM admins
				");

			$query->execute([]);

			return $query->fetchAll();
		}

		public function BlockAdmin(){
			$query = $this->db->prepare("
				DELETE FROM admins
				WHERE admin_id = ?;
				");
		}

	}
?>