<?php

namespace Commercetools\IntegrationTest\Api\CustomObject;

use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\CustomObject\CustomObjectDraft;
use Commercetools\Api\Models\CustomObject\CustomObjectDraftBuilder;
use Commercetools\Api\Models\CustomObject\CustomObjectDraftModel;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class CustomObjectFixture
{
    public const RAND_MAX = 10000;

    final public static function uniqueCustomObjectString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultCustomObjectDraftFunction()
    {
        $builder = CustomObjectDraftBuilder::of();
        $builder
            ->withContainer("test_" . self::uniqueCustomObjectString())
            ->withKey("key_" . self::uniqueCustomObjectString())
            ->withValue("value_" . self::uniqueCustomObjectString());

        return $builder;
    }

    final public static function defaultCustomObjectDraftBuilderFunction(CustomObjectDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultCustomObjectCreateFunction(ApiRequestBuilder $builder, CustomObjectDraft $draft)
    {
        $request = $builder->with()->customObjects()->post($draft);

        return $request->execute();
    }

    final public static function defaultCustomObjectDeleteFunction(ApiRequestBuilder $builder, CustomObject $resource)
    {
        $request = $builder
            ->with()
            ->customObjects()
            ->withContainerAndKey($resource->getContainer(), $resource->getKey())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftCustomObject(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCustomObjectDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCustomObjectCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCustomObjectDeleteFunction'];
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

    final public static function withCustomObject(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftCustomObject(
            $builder,
            [__CLASS__, 'defaultCustomObjectDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftCustomObject(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCustomObjectDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCustomObjectCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCustomObjectDeleteFunction'];
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

    final public static function withUpdateableCustomObject(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftCustomObject(
            $builder,
            [__CLASS__, 'defaultCustomObjectDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
