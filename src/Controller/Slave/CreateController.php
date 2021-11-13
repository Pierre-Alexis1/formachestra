<?php


namespace App\Controller\Slave;


use Symfony\Component\HttpFoundation\JsonResponse;

class CreateController
{
    public function create()
    {
        return new JsonResponse('Nouvel esclave créé', 200);
    }
}