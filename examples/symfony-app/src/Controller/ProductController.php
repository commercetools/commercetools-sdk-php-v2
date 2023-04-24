<?php

namespace App\Controller;

use App\Service\ProductService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    #[Route('/products', name: "get_products")]
    public function getProducts(): Response
    {
        return new JsonResponse($this->productService->getProducts()->getResults()->toArray());
    }
}
