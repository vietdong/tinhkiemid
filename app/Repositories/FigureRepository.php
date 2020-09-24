<?php
namespace App\Repositories;
use App\Repositories\ModelRepository;

class FigureRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Figure::class;
    }

}