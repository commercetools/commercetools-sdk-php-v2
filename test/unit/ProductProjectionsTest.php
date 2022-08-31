<?php

namespace Commercetools\UnitTest;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Api\Models\Product\AttributeAccessor;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;
use Commercetools\Api\Models\Product\ProductProjectionPagedQueryResponse;
use Commercetools\Api\Models\Product\ProductProjectionPagedQueryResponseModel;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;

class ProductProjectionsTest extends TestCase
{
    public function testAttributeMapping()
    {
        $productsJson = json_decode(file_get_contents(__DIR__ . "/products.json"));
        $products = ProductProjectionPagedQueryResponseModel::fromStdClass($productsJson)->getResults();

//        /** @var ClientInterface $client */
//        $builder = new ApiRequestBuilder($client);
//        $productResponse = $builder->withProjectKey("")->productProjections()->get()->execute();
//        $products = $productResponse->getResults();

//        /** @var ProductProjection $product */
        foreach ($products as $product) {
            foreach ($product->getMasterVariant()->getAttributes() as $attribute) {
                /** @var AttributeAccessor $attrAccessor */
                $attrAccessor = $attribute->with(AttributeAccessor::of());
                switch ($attrAccessor->getName()) {
                    case "someStringAttribute": $stringValue = $attrAccessor->getValueAsString();
                        break;
                    case "someEnumAttribute": $enumValue = $attrAccessor->getValueAsEnum();
                        break;
                    case "someBooleanAttribute": $boolValue = $attrAccessor->getValueAsBool();
                        break;
                    case "text1": self::assertSame("englisch1", $attrAccessor->getValueAsLocalizedString()->at("en"));
                        break;
                    case "aboolean": self::assertTrue($attrAccessor->getValueAsBool());
                        break;
                }
            }
        }
    }
}
