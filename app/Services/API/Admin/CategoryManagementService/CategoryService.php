<?php

namespace App\Services\API\Admin\CategoryManagementService;
use App\Models\Category;

class CategoryService
{
    public function list()
    {
        return Category::paginate(10);
    }
    public function getById($id)
    {
        return Category::findOrFail($id);
    }
    public  function create(array $data)
    {
          $category = Category::create($data);
           return  $category;
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
