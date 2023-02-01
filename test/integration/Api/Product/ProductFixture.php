<?php

namespace Commercetools\IntegrationTest\Api\Product;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraftBuilder as PriceDraftBuilder;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductDraft;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\IntegrationTest\Api\ProductType\ProductTypeFixture;
use Commercetools\IntegrationTest\Api\TaxCategory\TaxCategoryFixture;
use Ramsey\Uuid\Uuid;

class ProductFixture
{
    final public static function uniqueProductString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function getAttributesDefinitionDraftCollection(): AttributeDefinitionDraftCollection
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName('test-text')
            ->withLabel(LocalizedStringBuilder::of()->put('en', 'test-text')->build())
            ->withIsRequired(false)
            ->withAttributeConstraint('None')
            ->withInputHint('SingleLine')
            ->withIsSearchable(false)
            ->build();

        return new AttributeDefinitionDraftCollection([$attributeDefinitionDraft]);
    }

    final public static function defaultProductDraftFunction($productTypeResourceIdentifier, $taxCategoryResourceIdentifier)
    {
        $priceDraft = PriceDraftBuilder::of()
            ->withValue(
                MoneyBuilder::of()
                    ->withCentAmount(100)
                    ->withCurrencyCode('EUR')
                    ->build()
            )
            ->build();

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withSku(self::uniqueProductString())
            ->withPrices(new PriceDraftCollection([$priceDraft]))
            ->build();

        $builder = ProductDraftBuilder::of();
        $builder->withKey(self::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withProductType($productTypeResourceIdentifier)
            ->withSlug(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withDescription(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->withTaxCategory($taxCategoryResourceIdentifier);

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
        $request = $builder
            ->with()
            ->products()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftProduct(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        ProductTypeFixture::withDraftProductType(
            $builder,
            function (ProductTypeDraftBuilder $draftBuilder) {
                $draftBuilder->withAttributes(self::getAttributesDefinitionDraftCollection())->build();

                return $draftBuilder->build();
            },
            function (ProductType $productType) use (
                $builder,
                $draftBuilderFunction,
                $assertFunction,
                $createFunction,
                $deleteFunction,
                $draftFunction
            ) {
                TaxCategoryFixture::withTaxCategory(
                    $builder,
                    function (TaxCategory $taxCategory) use (
                        $builder,
                        $productType,
                        $draftBuilderFunction,
                        $assertFunction,
                        $createFunction,
                        $deleteFunction,
                        $draftFunction
                    ) {
                        $taxCategoryResourceIdentifier = TaxCategoryResourceIdentifierBuilder::of()
                            ->withId($taxCategory->getId())
                            ->build();
                        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
                            ->withId($productType->getId())
                            ->build();
                        if ($draftFunction == null) {
                            $draftFunction = function () use ($productTypeResourceIdentifier, $taxCategoryResourceIdentifier) {
                                return call_user_func(
                                    [__CLASS__, 'defaultProductDraftFunction'],
                                    $productTypeResourceIdentifier,
                                    $taxCategoryResourceIdentifier
                                );
                            };
                        } else {
                            $draftFunction = function () use (
                                $productTypeResourceIdentifier,
                                $taxCategoryResourceIdentifier,
                                $draftFunction
                            ) {
                                return call_user_func($draftFunction, $productTypeResourceIdentifier, $taxCategoryResourceIdentifier);
                            };
                        }
                        if ($createFunction == null) {
                            $createFunction = [__CLASS__, 'defaultProductCreateFunction'];
                        }
                        if ($deleteFunction == null) {
                            $deleteFunction = [__CLASS__, 'defaultProductDeleteFunction'];
                        }
                        $initialDraft = call_user_func($draftFunction);

                        $resourceDraft = call_user_func($draftBuilderFunction, $initialDraft);

                        $resource = call_user_func(
                            $createFunction,
                            $builder,
                            $resourceDraft,
                            [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]
                        );
                        try {
                            call_user_func($assertFunction, $resource, [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]);
                        } finally {
                            call_user_func($deleteFunction, $builder, $resource);
                        }
                    }
                );
            }
        );
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

    final public static function withPublishedProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftProduct(
            $builder,
            [__CLASS__, 'publishedProductDraftBuilderFunction'],
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
        callable $draftFunction = null
    ) {
        ProductTypeFixture::withDraftProductType(
            $builder,
            function (ProductTypeDraftBuilder $draftBuilder) {
                $draftBuilder->withAttributes(self::getAttributesDefinitionDraftCollection())->build();

                return $draftBuilder->build();
            },
            function (ProductType $productType) use (
                $builder,
                $draftBuilderFunction,
                $assertFunction,
                $createFunction,
                $deleteFunction,
                $draftFunction
            ) {
                TaxCategoryFixture::withTaxCategory(
                    $builder,
                    function (TaxCategory $taxCategory) use (
                        $builder,
                        $productType,
                        $draftBuilderFunction,
                        $assertFunction,
                        $createFunction,
                        $deleteFunction,
                        $draftFunction
                    ) {
                        $taxCategoryResourceIdentifier = TaxCategoryResourceIdentifierBuilder::of()
                            ->withId($taxCategory->getId())
                            ->build();
                        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
                            ->withId($productType->getId())
                            ->build();
                        if ($draftFunction == null) {
                            $draftFunction = function () use ($productTypeResourceIdentifier, $taxCategoryResourceIdentifier) {
                                return call_user_func(
                                    [__CLASS__, 'defaultProductDraftFunction'],
                                    $productTypeResourceIdentifier,
                                    $taxCategoryResourceIdentifier
                                );
                            };
                        } else {
                            $draftFunction = function () use (
                                $productTypeResourceIdentifier,
                                $taxCategoryResourceIdentifier,
                                $draftFunction
                            ) {
                                return call_user_func($draftFunction, $productTypeResourceIdentifier, $taxCategoryResourceIdentifier);
                            };
                        }
                        if ($createFunction == null) {
                            $createFunction = [__CLASS__, 'defaultProductCreateFunction'];
                        }
                        if ($deleteFunction == null) {
                            $deleteFunction = [__CLASS__, 'defaultProductDeleteFunction'];
                        }
                        $initialDraft = call_user_func($draftFunction);

                        $resourceDraft = call_user_func($draftBuilderFunction, $initialDraft);

                        $resource = call_user_func(
                            $createFunction,
                            $builder,
                            $resourceDraft,
                            [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]
                        );
                        $updatedResource = null;
                        try {
                            $updatedResource = call_user_func($assertFunction, $resource, [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]);
                        } finally {
                            call_user_func($deleteFunction, $builder, $updatedResource != null ? $updatedResource : $resource);
                        }
                    }
                );
            }
        );
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

    final public static function withUpdateablePublishedProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftProduct(
            $builder,
            [__CLASS__, 'publishedProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
