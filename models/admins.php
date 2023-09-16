<?php
	require_once("base.php");

	class Admins extends Base {
		public function getAdmin($username){
			$query = $this->db->prepare("
			SELECT admin_id, password, is_active
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

		public function newAdmin($data){
			$query = $this->db->prepare("
				INSERT INTO admins (username, email, password, is_active)
				VALUES (?, ?, ?, '1')
				");

			$query->execute([
				$data["username"],
				$data["email"],
				password_hash($data["password"], PASSWORD_DEFAULT)
			]);
		}

		public function deleteAdmin($resource_id){
			$query = $this->db->prepare("
				DELETE FROM admins
				WHERE admin_id = ?
				");

			$query->execute([$resource_id]);
		}

	}
?>