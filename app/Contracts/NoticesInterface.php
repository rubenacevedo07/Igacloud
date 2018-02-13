<?php

namespace App\Contracts;

interface NoticesInterface
{
	public function index();

	public function getById($id);
}
