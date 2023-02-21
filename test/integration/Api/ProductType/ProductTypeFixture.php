<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
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
}
