<?php

namespace Commercetools\IntegrationTest\Api\Product;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Ramsey\Uuid\Uuid;
use Commercetools\IntegrationTest\ApiTestCase;

class ProductProjectionRequestTest extends ApiTestCase
{
    public function testGetVariantBySku()
    {
        $builder = $this->getApiBuilder();
        $uniqueString = 'test-' . Uuid::uuid4();
        $productTypeDraft = ProductTypeDraftBuilder::of()->withName("name" . $uniqueString)
                        ->withDescription("description" . $uniqueString)->build();
        $request = $builder->productTypes()->post($productTypeDraft);
        $productType = $request->execute();

        $draft = ProductDraftBuilder::of()->withName(LocalizedStringBuilder::of()->put('en', $uniqueString)->build())
                            ->withSlug(LocalizedStringBuilder::of()->put('en', $uniqueString)->build())
                            ->withProductType(ProductTypeResourceIdentifierBuilder::of()->withId($productType->getId())->build())
                            ->withMasterVariant(ProductVariantDraftBuilder::of()->withSku($uniqueString)
                                ->withPrices(PriceDraftCollection::of()->add(PriceDraftBuilder::of()->withValue(MoneyBuilder::of()->withCentAmount(100)->withCurrencyCode("EUR")->build())->build()))
                                ->build())
                            ->build();

        $request = $builder->products()->post($draft);
        $product = $request->execute();

        $sku = $product->getMasterData()->getCurrent()->getMasterVariant()->getSku();
        $request = $builder->productProjections()->withId($product->getId())->get();
        $productProjectionResponse = $request->execute();

        //the method created using valueByKey method
        $variant = $this->getVariantBySku($sku, $productProjectionResponse);

        $this->assertNotEmpty($variant);
        $this->assertSame($product->getId(), $productProjectionResponse->getId());

        $request = $builder->with()->products()->withId($product->getId())->delete()->withVersion($product->getVersion());
        $queryResponse = $request->execute();

        $this->assertNotEmpty($queryResponse);
    }


    /**
     * @param $sku
     * @param \Commercetools\Api\Models\Product\ProductProjection $productProjectionResponse
     * @return mixed|null
     */
    public function getVariantBySku($sku, $productProjectionResponse)
    {
        if ($sku == $productProjectionResponse->getMasterVariant()) {
            return $productProjectionResponse->getMasterVariant();
        }

        return $productProjectionResponse->getVariants()->valueByKey("SKU", $sku);
    }
}
