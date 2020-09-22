<?php
namespace App\Repositories;
use App\Repositories\ModelRepository;

class CategoryRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Category::class;
    }

}