<?php

namespace App\Repository;

use App\Contracts\NoticesInterface;
use App\Notice;
use Auth;
use Illuminate\Http\Request;

class NoticeRepository implements NoticesInterface
{
	protected $mod;
	/*
	*
	*@param App\Notice $model
	*
	*/
	public function __construct(Notice $model)
	{
		$this->mod = $model;
	}

	public function index()
	{
		return $this->mod->paginate(5);
	}

	public function getById($id)
	{
		return $this->mod->findOrFail($id);
	}

	

}