<?php
	require_once("base.php");

	class Projects extends Base {
		public function getProjectsIndex() {

			$query = $this->db->prepare("
				SELECT project_id, title, description, year, img_description, category_id, year
				FROM projects
				ORDER BY year desc
				LIMIT 3
				");

			$query->execute();

			return $query->fetchAll();

		}

		public function getNumberProjects(){
			$query = $this->db->prepare("
				SELECT COUNT(project_id)
				FROM projects
				");

			$query->execute();

			return $query->fetch();
		}

		public function getAllProjects(){

			$query = $this->db->prepare("
				SELECT projects.project_id, projects.title, projects.description, projects.year, projects.img_description, categories.class, categories.name
				FROM projects
				INNER JOIN categories USING (category_id)
				ORDER BY year desc
				");

			$query->execute();

			return $query->fetchAll();
		}

		public function getProjectDetails($id){
			$query = $this->db->prepare("
				SELECT *
				FROM projects
				WHERE project_id = ?
				");

				$query->execute([
				$id
			]);

			return $query->fetch();
			}

		public function getProjectImgs($id){
			$query = $this->db->prepare("
				SELECT *
				FROM project_imgs
				WHERE project_id = ?
				");

				$query->execute([
				$id
			]);

			return $query->fetchAll();
			}


		public function listProjects(){
			$query = $this->db->prepare("
				SELECT project_id, title, description, year, img_description, category_id
				FROM projects
				");

			$query->execute([
			]);

			return $query->fetchAll();
			}

		public function deleteProject($resource_id){
			$query = $this->db->prepare("
				DELETE FROM projects
				WHERE project_id = ?
				");

			$query->execute([$resource_id]);
		}

		public function editProject($data){
			$query = $this->db->prepare("
				UPDATE projects
				SET title = ?, description = ?, year = ?, img_description = ?, content1 = ?, content2 = ?, client = ?, services = ?
				WHERE project_id = ?
				");

			$query->execute([
				$data["project_title"],
				$data["project_description"],
				$data["project_year"],
				$_FILES["project_imgdescription"]["name"],
				$data["project_text1"],
				$data["project_text2"],
				$data["project_client"],
				$data["project_services"],
				$data["project_id"]
			]);
		}

		public function newProject($data){
			$query = $this->db->prepare("
				INSERT INTO projects (title, description, year, img_description, content1, content2, client, services, category_id)
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);
				");

			$query->execute([
				$data["title"],
				$data["description"],
				$data["year"],
				$_FILES["img_description"]["name"],
				$data["text1"],
				$data["text2"],
				$data["client"],
				$data["services"],
				$categories_fk
			]);
		}

		public function nextProject($data){
			$query = $this->db->prepare("
				SELECT project_id
				FROM projects
				WHERE project_id < ?
				ORDER BY project_id DESC
				LIMIT 1
				");

			$query->execute([
				$data
			]);

			return $query->fetch();
		}

		public function previousProject($data){
			$query = $this->db->prepare("
				SELECT project_id
				FROM projects
				WHERE project_id > ?
				ORDER BY project_id ASC
				LIMIT 1
				");

			$query->execute([
				$data			]);

			return $query->fetch();
		}
		};
?>