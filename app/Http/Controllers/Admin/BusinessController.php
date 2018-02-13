<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\BusinessCrudRequest as StoreRequest;
use App\Http\Requests\BusinessCrudRequest as UpdateRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class BusinessController extends CrudController {
    
    
    public function setup() {

     
        $this->user_id = Auth::user()->business;

        $this->crud->setModel("App\Business");
        $this->crud->setRoute("admin/business");
        $this->crud->setEntityNameStrings('Negocio', 'negocios');

        $this->crud->setColumns(['id','name','description','image']);
        $this->crud->addField([
                'name'  => 'name',
                'label' => 'Inserte nombre del negocio',
            ]);

        $this->crud->addField([  
                'name' => 'description',
                'label' => 'Descripción',
                'type' => 'wysiwyg'
            ]);
        $this->crud->addField([
                'label' => "Imagen",
                'name' => "image",
                'type' => 'image',
                'upload' => true,
                'crop' => true,
                'aspect_ratio' => 1,
            ]);
        }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}