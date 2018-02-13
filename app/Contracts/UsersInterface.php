<?php

namespace App\Contracts;

interface UsersInterface
{
	public function index();

	public function getById($id);
}
