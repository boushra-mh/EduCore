<?php

namespace App\Traits;

trait traitCRUDOperations
{
    protected string $model;


    public function list()
    {
        return ($this ->model)::paginate(10);
    }
    public function getById($id)
    {
        return ($this->model)::findOrFail($id);
    }
    public  function create(array $data)
    {
             return   ($this->model)::create($data);

    }
    public function update($id ,$data)
    {
        $category = $this->getById($id);
        $category->update($data);
        return $category;
    }
    public function delete($id)
    {
        $category = $this->getById($id);
        $category->delete();
        return true;
    }



}
