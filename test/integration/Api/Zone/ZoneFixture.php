<?php

namespace Commercetools\IntegrationTest\Api\Zone;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Models\Zone\Zone;
use Commercetools\Api\Models\Zone\ZoneDraft;
use Commercetools\Api\Models\Zone\ZoneDraftBuilder;
use Ramsey\Uuid\Uuid;

class ZoneFixture
{
    final public static function uniqueZoneString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultZoneDraftFunction()
    {

        $builder = ZoneDraftBuilder::of();
        $builder
            ->withName(self::uniqueZoneString())
            ->withKey(self::uniqueZoneString())
            ->withDescription(self::uniqueZoneString());

        return $builder;
    }

    final public static function defaultZoneDraftBuilderFunction(ZoneDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultZoneCreateFunction(ApiRequestBuilder $builder, ZoneDraft $draft)
    {
        $request = $builder->with()->zones()->post($draft);

        return $request->execute();
    }

    final public static function defaultZoneDeleteFunction(ApiRequestBuilder $builder, Zone $resource)
    {
        $request = $builder
            ->with()
            ->zones()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftZone(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultZoneDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultZoneCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultZoneDeleteFunction'];
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

    final public static function withZone(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftZone(
            $builder,
            [__CLASS__, 'defaultZoneDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftZone(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultZoneDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultZoneCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultZoneDeleteFunction'];
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

    final public static function withUpdateableZone(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftZone(
            $builder,
            [__CLASS__, 'defaultZoneDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
