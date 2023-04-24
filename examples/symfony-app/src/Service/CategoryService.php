<?php

namespace App\Service;

use App\Controller\Client\RequestBuilder;

class CategoryService
{
    private $builder;

    public function __construct(RequestBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function getCategories()
    {
        $apiRequestBuilder = $this->builder->getApiRequestBuilder();

        return $apiRequestBuilder->categories()
            ->get()
            ->execute();
    }
}
