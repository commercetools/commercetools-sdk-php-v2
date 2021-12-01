<?php

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\Product\AttributeAccessor;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionPagedQueryResponseModel;
use Commercetools\Api\Models\Product\ProductProjectionVariantSkuAccessor;
use Commercetools\Api\Models\Product\ProductVariantSkuAccessor;
use PHPUnit\Framework\TestCase;

class ProductProjectionsTest extends TestCase
{
    public function testAttributeMapping()
    {
        $productsJson = json_decode(file_get_contents(__DIR__ . "/products.json"));
        $products = ProductProjectionPagedQueryResponseModel::fromStdClass($productsJson)->getResults();

        /** @var ProductProjection $product */
        foreach ($products as $product) {
            foreach ($product->getMasterVariant()->getAttributes() as $attribute) {
                /** @var AttributeAccessor $attrAccessor */
                $attrAccessor = $attribute->with(AttributeAccessor::of());
                switch ($attrAccessor->getName()) {
                    case "someStringAttribute": $stringValue = $attrAccessor->getValueAsString(); break;
                    case "someEnumAttribute": $enumValue = $attrAccessor->getValueAsEnum(); break;
                    case "someBooleanAttribute": $boolValue = $attrAccessor->getValueAsBool(); break;
                    case "text1": self::assertSame("englisch1", $attrAccessor->getValueAsLocalizedString()->at("en")); break;
                    case "aboolean": self::assertTrue($attrAccessor->getValueAsBool()); break;
                }
            }
        }
    }

    public function testSkuMapping()
    {
        $productsJson = json_decode(file_get_contents(__DIR__ . "/products.json"));
        $products = ProductProjectionPagedQueryResponseModel::fromStdClass($productsJson)->getResults();

        $variantsAccessor = $products[0]->with(ProductVariantSkuAccessor::of());
        self::assertSame(1, $variantsAccessor->getBySku("prod1-abc")->getId());
        self::assertNull($variantsAccessor->getBySku("non-existant"));
        self::assertSame(2, $variantsAccessor->getBySku("prod1-def")->getId());

        $variantsAccessor = $products[1]->with(ProductVariantSkuAccessor::of());
        self::assertSame(1, $variantsAccessor->getBySku("prod2-abc")->getId());
        self::assertSame(2, $variantsAccessor->getBySku("prod2-def")->getId());
    }
}
