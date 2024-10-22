<?php

namespace App\Controller;

use App\Service\CategoryService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CategoryController
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    #[Route('/categories', name: "get_categories")]
    public function getCategories(): Response
    {
        return new JsonResponse($this->categoryService->getCategories()->getResults()->toArray());
    }
}
