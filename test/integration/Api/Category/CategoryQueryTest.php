<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponse;
use Commercetools\IntegrationTest\ApiTestCase;

class CategoryQueryTest extends ApiTestCase
{
    public function testQuery()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(CategoryPagedQueryResponse::class, $categoryQueryResponse);
                $this->assertCount(1, $categoryQueryResponse->getResults());
            }
        );
    }

    public function testGetById()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($category->getId(), $categoryQueryResponse->getId());
            }
        );
    }

    public function testGetByKey()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withKey($category->getKey())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(Category::class, $categoryQueryResponse);
                $this->assertSame($category->getId(), $categoryQueryResponse->getId());
            }
        );
    }

}
