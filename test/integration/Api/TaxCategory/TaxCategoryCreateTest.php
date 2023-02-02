<?php

namespace Commercetools\IntegrationTest\Api\TaxCategory;

use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\Api\TaxCategory\TaxCategoryFixture;
use Commercetools\IntegrationTest\ApiTestCase;

class TaxCategoryCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        TaxCategoryFixture::withTaxCategory(
            $builder,
            function (TaxCategory $taxCategory) use ($builder) {
                $request = $builder
                    ->with()
                    ->taxCategories()
                    ->withId($taxCategory->getId())
                    ->get();
                $taxCategoryQueryResponse = $request->execute();

                $this->assertSame($taxCategory->getName(), $taxCategoryQueryResponse->getName());
                $this->assertSame($taxCategory->getId(), $taxCategoryQueryResponse->getId());
                $this->assertSame(1, $taxCategoryQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        TaxCategoryFixture::withTaxCategory(
            $builder,
            function (TaxCategory $taxCategory) use ($builder) {
                $request = $builder
                    ->with()
                    ->taxCategories()
                    ->withKey($taxCategory->getKey())
                    ->delete()
                    ->withVersion($taxCategory->getVersion());
                $taxCategoryQueryResponse = $request->execute();

                $this->assertSame($taxCategory->getId(), $taxCategoryQueryResponse->getId());
                $this->assertInstanceOf(TaxCategory::class, $taxCategoryQueryResponse);

                $request = $builder->with()->taxCategories()->withKey($taxCategory->getKey())->get();
                $request->execute();
            }
        );
    }
}
