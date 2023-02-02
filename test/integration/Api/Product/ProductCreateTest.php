<?php

namespace Commercetools\IntegrationTest\Api\Product;

use Commercetools\Api\Models\Product\Product;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\ApiTestCase;

class ProductCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        ProductFixture::withProduct(
            $builder,
            function (Product $product) use ($builder) {
                $request = $builder
                    ->with()
                    ->products()
                    ->withId($product->getId())
                    ->get();
                $productQueryResponse = $request->execute();

                $this->assertSame($product->getKey(), $productQueryResponse->getKey());
                $this->assertSame(1, $productQueryResponse->getVersion());
            }
        );
    }

    public function testCreateWithPublishedProduct()
    {
        $builder = $this->getApiBuilder();

        ProductFixture::withPublishedProduct(
            $builder,
            function (Product $product) use ($builder) {
                $request = $builder
                    ->with()
                    ->products()
                    ->withId($product->getId())
                    ->get();
                $productQueryResponse = $request->execute();

                $this->assertSame($product->getKey(), $productQueryResponse->getKey());
                $this->assertSame(1, $productQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ProductFixture::withProduct(
            $builder,
            function (Product $product) use ($builder) {
                $request = $builder
                    ->with()
                    ->products()
                    ->withKey($product->getKey())
                    ->delete()
                    ->withVersion($product->getVersion());
                $productQueryResponse = $request->execute();

                $this->assertSame($product->getId(), $productQueryResponse->getId());
                $this->assertInstanceOf(Product::class, $productQueryResponse);

                $request = $builder->with()->products()->withKey($product->getKey())->get();
                $request->execute();
            }
        );
    }
}
