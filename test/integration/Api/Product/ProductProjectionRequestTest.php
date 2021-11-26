<?php

namespace Commercetools\IntegrationTest\Api\Product;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
use Commercetools\Core\Helper\Uuid;
use Commercetools\IntegrationTest\ApiTestCase;

class ProductProjectionRequestTest extends ApiTestCase
{
    public function testGetVariantBySku()
    {
        $builder = $this->getApiBuilder();

        $uniqueCategoryString = 'test-' . Uuid::uuidv4();
        $draft = ProductDraftBuilder::of()->withName(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString)->build())
                            ->withSlug(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString)->build())
                            ->withMasterVariant(ProductVariantDraftBuilder::of()->withSku($uniqueCategoryString)
                                ->withPrices(PriceDraftCollection::of()->add(PriceDraftBuilder::of()->withValue(MoneyBuilder::of()->withCentAmount(100)->withCurrencyCode("EUR")->build())->build()))
                                ->build())
                            ->build();

        $request = $builder->with()->products()->post($draft);
        $product = $request->execute();

        $sku = $product->getMasterData()->getCurrent()->getMasterVariant()->getSku();
        $request = $builder->with()->productProjections()->withId($product->getId())->get();
        $productProjectionResponse = $request->execute();
        $variant = $this->getVariantBySku($sku, $productProjectionResponse);

        $this->assertNotEmpty($variant);

        $this->assertCount(1, $productProjectionResponse->getResults());
        $this->assertSame($product->getId(), $productProjectionResponse->getResults()->current()->getId());

        $request = $builder->with()->products()->withId($product->getId())->delete()->withVersion($product->getVersion());
        $queryResponse = $request->execute();

        $this->assertNotEmpty($queryResponse);
    }


    /**
     * @param $sku
     * @param $productProjectionResponse
     * @return mixed
     */
    public function getVariantBySku($sku, $productProjectionResponse)
    {
        if ($sku == $productProjectionResponse->getMasterVariant()->getSku()) {
            return $productProjectionResponse->getMasterVariant();
        }

        return $productProjectionResponse->getVariants()->valueByKey("SKU", $sku);
    }
}
