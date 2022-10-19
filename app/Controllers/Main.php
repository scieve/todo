<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{
	public function index()
	{

		$data['jobs'] = $this->getAllJobs();
		return view('home', $data);
	}

	public function new_job()
	{
		return view('new_job');
	}

	public function newJobSubmition()
	{
		if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
			return redirect()->to(site_url('index.php/main'));
		}

		$params = [
			'job' => $this->request->getPost('job_name')
		];

		$db = db_connect();
		$db->query("INSERT INTO jobs(job, datetime_created) VALUES (:job:, NOW())", $params);
		$db->close();

		return redirect()->to(site_url('index.php/main'));
	}

	public function jobDone($id_job)
	{
		$params = [
			'id_job' => $id_job
		];
		$db = db_connect();
		$db->query("
			UPDATE jobs
			SET datetime_finished = NOW(),
			datetime_updated = NOW()
			WHERE id_job = :id_job:
		", $params);
		$db->close();

		return redirect()->to(site_url('index.php/main'));
	}

	public function editJob(int $id_job = -1)
	{
		$params = [
			'id_job' => $id_job
		];

		$db = db_connect();
		$dados = $db->query("
			SELECT * FROM jobs WHERE id_job = :id_job:
		", $params)->getResultObject();
		$db->close();


		$data['job'] = $dados[0];
		return view('edit_job', $data);
	}

	public function editJobsubmition()
	{
		$params = [
			'id_job' => $this->request->getPost('id_job'),
			'job' => $this->request->getPost('job_name')
		];
		$db = db_connect();
		$db->query("
			UPDATE jobs
			SET job = :job:,
			datetime_updated = NOW()
			WHERE id_job = :id_job:
		", $params);
		$db->close();

		return redirect()->to(site_url('index.php/main'));
	}

	public function deleteJob($id_job)
	{

		$params = [
			'id_job' => $id_job
		];

		$db = db_connect();
		$data['job'] = $db->query("
			SELECT * FROM jobs WHERE id_job = :id_job:
		", $params)->getResultObject()[0];
		$db->close();


		return view('delete_job', $data);
	}

	public function deleteJobconfirm($id_job)
	{

		$params = [
			'id_job' => $id_job
		];

		$db = db_connect();
		$db->query("DELETE FROM jobs WHERE id_job = :id_job:", $params);
		$db->close();

		return redirect()->to(site_url('index.php/main'));
	}



	private function getAllJobs()
	{

		$db = db_connect();
		$dados = $db->query("SELECT * FROM jobs")->getResultObject();
		$db->close();
		return $dados;
	}
}
