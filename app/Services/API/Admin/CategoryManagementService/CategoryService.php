<?php

namespace App\Services\API\Admin\CategoryManagementService;
use App\Models\Category;
use App\Traits\traitCRUDOperations;

class CategoryService
{
    use traitCRUDOperations;
    // public function list()
    // {
    //     return Category::paginate(10);
    // }
    // public function getById($id)
    // {
    //     return Category::findOrFail($id);
    // }
    // public  function create(array $data)
    // {
    //       $category = Category::create($data);
    //        return  $category;
    // }
    // public function update($id ,$data)
    // {
    //     $category = $this->getById($id);
    //     $category->update($data);
    //     return $category;
    // }
    // public function delete($id)
    // {
    //     $category = $this->getById($id);
    //     $category->delete();
    //     return true;
    // }
    public function __construct()
    {
        $this->model =new  Category();
    }


}
