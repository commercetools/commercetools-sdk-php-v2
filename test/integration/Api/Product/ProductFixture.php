<?php

namespace Commercetools\IntegrationTest\Api\Product;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraftBuilder as PriceDraftBuilder;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeBuilder;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
use Commercetools\Api\Models\Product\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\Product\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\Product\AttributeTextTypeBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductDraft;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductDraftModel;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftCollection;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class ProductFixture
{
    final public static function uniqueProductString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultProductDraftFunction($productType, $taxCategory)
    {
        $priceDraft = PriceDraftBuilder::of()
            ->withValue(
                MoneyBuilder::of()
                    ->withCentAmount(100)
                    ->withCurrencyCode('EUR')
                    ->build()
            )
            ->build();

        $attribute = AttributeBuilder::of()
            ->withName('test-text')
            ->withValue('foo')
            ->build();

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withSku(self::uniqueProductString())
            ->withKey(self::uniqueProductString())
            ->withPrices(new PriceDraftCollection([$priceDraft]))
            ->withAttributes(new AttributeCollection([$attribute]))
            ->build();

        $builder = ProductDraftBuilder::of();
        $builder->withKey(self::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withProductType(
                ProductTypeResourceIdentifierBuilder::of()
                    ->withId($productType->getId())
                    ->build()
            )
            ->withSlug(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withDescription(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->withTaxCategory(
                TaxCategoryResourceIdentifierBuilder::of()
                    ->withId($taxCategory->getId())
                    ->build()
            );

        return $builder;
    }

    final public static function defaultProductDraftBuilderFunction(ProductDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function publishedProductDraftBuilderFunction(ProductDraftBuilder $draftBuilder)
    {
        return $draftBuilder->withPublish(true)->build();
    }

    final public static function defaultProductCreateFunction(ApiRequestBuilder $builder, ProductDraft $draft)
    {
        $request = $builder->with()->products()->post($draft);

        return $request->execute();
    }

    final public static function defaultProductDeleteFunction(ApiRequestBuilder $builder, Product $resource)
    {
        $request = $builder->with()->products()->withId($resource->getId())->delete()->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftProduct(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultProductDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultProductCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultProductDeleteFunction'];
        }
        $initialDraft = call_user_func($draftFunction);

        $resourceDraft = call_user_func($draftBuilderFunction, $initialDraft);

        $resource = call_user_func($createFunction, $builder, $resourceDraft, ...$additionalResources);
        try {
            call_user_func($assertFunction, $resource, ...$additionalResources);
        } finally {
            call_user_func($deleteFunction, $builder, $resource);
        }
    }

    final public static function withProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftProduct(
            $builder,
            [__CLASS__, 'defaultProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftProduct(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultProductDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultProductCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultProductDeleteFunction'];
        }
        $initialDraft = call_user_func($draftFunction);

        $resourceDraft = call_user_func($draftBuilderFunction, $initialDraft);

        $resource = call_user_func($createFunction, $builder, $resourceDraft, ...$additionalResources);

        $updatedResource = null;
        try {
            $updatedResource = call_user_func($assertFunction, $resource, ...$additionalResources);
        } finally {
            call_user_func($deleteFunction, $builder, $updatedResource != null ? $updatedResource : $resource);
        }
    }

    final public static function withUpdateableProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftProduct(
            $builder,
            [__CLASS__, 'defaultProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
