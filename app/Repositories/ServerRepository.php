<?php
namespace App\Repositories;
use App\Repositories\ModelRepository;

class ServerRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Server::class;
    }

}