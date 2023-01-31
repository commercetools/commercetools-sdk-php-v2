<?php

namespace Commercetools\IntegrationTest\Api\Type;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\Type;
use Commercetools\Api\Models\Type\TypeDraft;
use Commercetools\Api\Models\Type\TypeDraftBuilder;
use Ramsey\Uuid\Uuid;

class TypeFixture
{
    final public static function uniqueTypeString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultTypeDraftFunction()
    {

        $builder = TypeDraftBuilder::of();
        $builder
            ->withKey(self::uniqueTypeString())
            ->withName(LocalizedStringBuilder::of()->put('en', self::uniqueTypeString())->build())
            ->withResourceTypeIds(["category"])
            ->build();

        return $builder;
    }

    final public static function defaultTypeDraftBuilderFunction(TypeDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultTypeCreateFunction(ApiRequestBuilder $builder, TypeDraft $draft)
    {
        $request = $builder->with()->types()->post($draft);

        return $request->execute();
    }

    final public static function defaultTypeDeleteFunction(ApiRequestBuilder $builder, Type $resource)
    {
        $request = $builder
            ->with()
            ->types()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftType(
        ApiRequestBuilder $builder,
        callable          $draftBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $draftFunction = null,
        array             $additionalResources = []
    )
    {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultTypeDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultTypeCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultTypeDeleteFunction'];
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

    final public static function withType(
        ApiRequestBuilder $builder,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $draftFunction = null
    )
    {
        self::withDraftType(
            $builder,
            [__CLASS__, 'defaultTypeDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftType(
        ApiRequestBuilder $builder,
        callable          $draftBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $draftFunction = null,
        array             $additionalResources = []
    )
    {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultTypeDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultTypeCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultTypeDeleteFunction'];
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

    final public static function withUpdateableType(
        ApiRequestBuilder $builder,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $draftFunction = null
    )
    {
        self::withUpdateableDraftType(
            $builder,
            [__CLASS__, 'defaultTypeDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
