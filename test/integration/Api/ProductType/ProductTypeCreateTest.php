<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\ApiTestCase;

class ProductTypeCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        ProductTypeFixture::withProductType(
            $builder,
            function (ProductType $productType) use ($builder) {
                $request = $builder
                    ->with()
                    ->productTypes()
                    ->withId($productType->getId())
                    ->get();
                $productTypeQueryResponse = $request->execute();

                $this->assertSame($productType->getName(), $productTypeQueryResponse->getName());
                $this->assertSame($productType->getId(), $productTypeQueryResponse->getId());
                $this->assertSame(1, $productTypeQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ProductTypeFixture::withProductType(
            $builder,
            function (ProductType $productType) use ($builder) {
                $request = $builder
                    ->with()
                    ->productTypes()
                    ->withKey($productType->getKey())
                    ->delete()
                    ->withVersion($productType->getVersion());
                $productTypeQueryResponse = $request->execute();

                $this->assertSame($productType->getId(), $productTypeQueryResponse->getId());
                $this->assertInstanceOf(ProductType::class, $productTypeQueryResponse);

                $request = $builder->with()->productTypes()->withKey($productType->getKey())->get();
                $request->execute();
            }
        );
    }
}
