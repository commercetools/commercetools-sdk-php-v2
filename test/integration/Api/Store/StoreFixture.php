<?php


namespace Commercetools\IntegrationTest\Api\Store;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Store\StoreDraft;
use Commercetools\Api\Models\Store\StoreDraftBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class StoreFixture
{
    final public static function uniqueStoreString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultStoreDraftFunction()
    {
        $builder = StoreDraftBuilder::of();
        $uniqueStoreString = self::uniqueStoreString();
        $builder
            ->withName(
                LocalizedStringBuilder::of()
                    ->put('en', 'test-' . $uniqueStoreString . '-title')
                    ->build()
            )
            ->withKey('test-' . $uniqueStoreString . '-key');

        return $builder;
    }

    final public static function defaultStoreDraftBuilderFunction(StoreDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultStoreCreateFunction(ApiRequestBuilder $builder, StoreDraft $draft)
    {
        $request = $builder->with()->stores()->post($draft);

        return $request->execute();
    }

    final public static function defaultStoreDeleteFunction(ApiRequestBuilder $builder, Store $resource)
    {
        $request = $builder
            ->with()
            ->stores()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftStore(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultStoreDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultStoreCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultStoreDeleteFunction'];
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

    final public static function withStore(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftStore(
            $builder,
            [__CLASS__, 'defaultStoreDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftStore(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultStoreDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultStoreCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultStoreDeleteFunction'];
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

    final public static function withUpdateableStore(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftStore(
            $builder,
            [__CLASS__, 'defaultStoreDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
