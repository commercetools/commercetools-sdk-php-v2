<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Core\Fixtures\FixtureException;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\ApiTestCase;

class CategoryCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withId($category->getId())->get();
                $categoryQueryResponse = $request->execute();

                $this->assertSame($category->getName()->current(), $categoryQueryResponse->getName()->current());
                $this->assertSame($category->getSlug()->current(), $categoryQueryResponse->getSlug()->current());
                $this->assertNotEmpty($categoryQueryResponse->getId());
                $this->assertSame(1, $categoryQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->withKey($category->getKey())->delete()->withVersion($category->getVersion());
                $categoryQueryResponse = $request->execute();

                $this->assertSame($category->getId(), $categoryQueryResponse->getId());
                $this->assertInstanceOf(Category::class, $categoryQueryResponse);

                $request = $builder->with()->categories()->withKey($category->getKey())->get();
                $request->execute();
            }
        );
    }
}
