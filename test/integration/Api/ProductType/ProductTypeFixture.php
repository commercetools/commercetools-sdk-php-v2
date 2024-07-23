<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\ProductUnpublishActionBuilder;
use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Api\Models\Product\ProductUpdateBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeDraft;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class ProductTypeFixture
{
    final public static function uniqueProductTypeString(): string
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultProductTypeDraftFunction(): ProductTypeDraftBuilder
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName('test-text')
            ->withLabel(LocalizedStringBuilder::of()->put('en', 'test-text')->build())
            ->withIsRequired(true)
            ->build();

        $builder = ProductTypeDraftBuilder::of();
        $builder->withKey(self::uniqueProductTypeString())
            ->withName(self::uniqueProductTypeString())
            ->withDescription(self::uniqueProductTypeString())
            ->withAttributes(new AttributeDefinitionDraftCollection([$attributeDefinitionDraft]));

        return $builder;
    }

    final public static function defaultProductTypeDraftBuilderFunction(ProductTypeDraftBuilder $draftBuilder): ProductTypeDraft
    {
        return $draftBuilder->build();
    }

    final public static function defaultProductTypeCreateFunction(ApiRequestBuilder $builder, ProductTypeDraft $draft)
    {
        $request = $builder->with()->productTypes()->post($draft);

        return $request->execute();
    }

    final public static function defaultProductTypeDeleteFunction(ApiRequestBuilder $builder, ProductType $resource)
    {
        $request = $builder
            ->with()
            ->productTypes()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftProductType(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultProductTypeDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultProductTypeCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultProductTypeDeleteFunction'];
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

    final public static function withProductType(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftProductType(
            $builder,
            [__CLASS__, 'defaultProductTypeDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftProductType(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultProductTypeDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultProductTypeCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultProductTypeDeleteFunction'];
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

    final public static function withUpdateableProductType(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftProductType(
            $builder,
            [__CLASS__, 'defaultProductTypeDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    public static function deleteProductAndProductTypes($builder, $name)
    {
        $bookProductTypeQueryResponse = $builder
            ->with()
            ->productTypes()
            ->get()
            ->withQueryParam("name", $name)
            ->execute();
        $bookProductType = $bookProductTypeQueryResponse->getResults()->current();
        $products = $builder
            ->with()
            ->products()
            ->get()
            ->withQueryParam("typeId", $bookProductType->getId())
            ->execute()
            ->getResults();

        if (!is_null($bookProductType)) {
            foreach ($products as $product) {
                $unblishedProduct = $builder->with()->products()->withId($product->getId())
                    ->post(
                        ProductUpdateBuilder::of()
                            ->withVersion($product->getVersion())
                            ->withActions(
                                ProductUpdateActionCollection::of()->add(ProductUnpublishActionBuilder::of()->build())
                            )->build()
                    );
                $product = $unblishedProduct->execute();

                $builder->products()
                    ->withId($product->getId())
                    ->delete()
                    ->withVersion($product->getVersion())
                    ->execute();
            }

            $builder
                ->productTypes()
                ->withKey($bookProductType->getKey())
                ->delete()
                ->withVersion($bookProductType->getVersion())
                ->execute();
        }
    }

    public static function defaultProductType($builder)
    {
        $name = "referenceable-product-1";

        return self::createProductType($builder, $name);
    }

    public static function fetchProductTypeByName($builder, $name)
    {
        $productType = $builder
            ->with()
            ->productTypes()
            ->get()
            ->withQueryParam("name", $name)
            ->execute();

        return $productType;
    }
    /**
     * @param ApiRequestBuilder $builder
     * @param string $name
     * @return void
     */
    public static function createProductType(ApiRequestBuilder $builder, string $name)
    {
        $productTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey(uniqid())
            ->withName($name)
            ->withDescription("")
            ->withAttributes(AttributeDefinitionDraftCollection::fromArray([""]))
            ->build();

        $productType = self::fetchProductTypeByName($builder, $name);
        if (is_null($productType)) {
            $builder->productTypes()
                ->post($productTypeDraft)
                ->execute();
        }
    }

    public function createProductTypeDraftWithAttribute()
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withName(ProductTypeFixture::uniqueProductTypeString())
            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "random-label"])->build())
            ->withType(AttributeLocalizedEnumTypeBuilder::of()
                ->withValues(AttributeLocalizedEnumValueCollection::fromArray(["random-type1", "random-type2"]))
                ->build())
            ->withAttributeConstraint(ProductTypeFixture::uniqueProductTypeString())
            ->withInputHint("SingleLine")
            ->withIsSearchable(true)
            ->withIsRequired(true)
            ->build();


        return $productTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey(ProductTypeFixture::uniqueProductTypeString())
            ->withName(ProductTypeFixture::uniqueProductTypeString())
            ->withDescription(ProductTypeFixture::uniqueProductTypeString())
            ->withAttributes(AttributeDefinitionDraftCollection::fromArray([$attributeDefinitionDraft]))
            ->build();
    }
}
