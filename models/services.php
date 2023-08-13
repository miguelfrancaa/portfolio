<?php
	require_once("base.php");

	class Services extends Base {
		public function getServices() {

			$query = $this->db->prepare("
				SELECT *
				FROM services
				");

			$query->execute();

			return $query->fetchAll();

		}

		public function newService($data) {
			$query = $this->db->prepare("
				INSERT INTO services (title, content)
				VALUES (?, ?)
				");

			$query->execute([
				$data["titleService"],
				$data["contentService"]
			]);
		}

		public function deleteService($resource_id){
			$query = $this->db->prepare("
				DELETE FROM services
				WHERE service_id = ?
				");

			$query->execute([$resource_id]);
		}
	}
?>