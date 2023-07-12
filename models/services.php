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
	}
?>