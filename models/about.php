<?php
	require_once("base.php");

	class About extends Base {
		public function getAboutInfo() {

			$query = $this->db->prepare("
				SELECT *
				FROM about
				");

			$query->execute();

			return $query->fetch();

		}
	}
?>