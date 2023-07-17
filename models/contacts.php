<?php
	require_once("base.php");

	class Contacts extends Base {
		public function sendContact($data){
			$query = $this->db->prepare("
				INSERT INTO contacts (name, email, subject, message)
				VALUES (?, ?, ?, ?)
				");

			$query->execute([
				$data["name"],
				$data["email"],
				$data["subject"],
				$data["message"]
			]);
		}

		
	}
?>