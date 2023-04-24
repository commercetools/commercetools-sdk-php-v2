<?php

namespace App\Service;

use App\Controller\Client\RequestBuilder;

class ProductService
{
    private $builder;

    public function __construct(RequestBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function getProducts()
    {
        $apiRequestBuilder = $this->builder->getApiRequestBuilder();

        return $apiRequestBuilder->productProjections()
            ->search()
            ->get()
            ->execute();
    }
}
