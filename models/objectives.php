<?php
	require_once("base.php");

	class Objectives extends Base {
		public function getObjectives() {

			$query = $this->db->prepare("
				SELECT *
				FROM objectives
				");

			$query->execute();

			return $query->fetchAll();

		}
	}
?>