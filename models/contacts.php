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

		public function listContacts(){
			$query = $this->db->prepare("
				SELECT *
				FROM contacts
				");

			$query->execute([]);

			return $query->fetchAll();
		}	

		public function deleteContact($resource_id){
			$query = $this->db->prepare("
				DELETE FROM contacts
				WHERE contact_id = ?
				");

			$query->execute([$resource_id]);
		}

		public function getContact($resource_id){
			$query = $this->db->prepare("
				SELECT *
				FROM contacts
				WHERE contact_id = ?
				");

			$query->execute([$resource_id]);

			return $query->fetch();
		}
	}
?>