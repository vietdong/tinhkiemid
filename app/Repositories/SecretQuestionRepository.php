<?php
namespace App\Repositories;
use App\Repositories\ModelRepository;

class SecretQuestionRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\SecretQuestion::class;
    }

}