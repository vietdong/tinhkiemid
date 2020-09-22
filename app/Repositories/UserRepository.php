<?php
namespace App\Repositories;
use App\Models\User;
use App\Repositories\ModelRepository;

class UserRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }

}