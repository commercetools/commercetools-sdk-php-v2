<?php


namespace Commercetools\IntegrationTest\Api\State;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateDraft;
use Commercetools\Api\Models\State\StateDraftBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class StateFixture
{
    final public static function uniqueStateString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultStateDraftFunction()
    {
        $builder = StateDraftBuilder::of();
        $uniqueStateString = self::uniqueStateString();
        $builder->withName(LocalizedStringBuilder::of()->put('en', 'test-' . $uniqueStateString . '-title')->build())
            ->withKey('test-' . $uniqueStateString . '-key');

        return $builder;
    }

    final public static function defaultStateDraftBuilderFunction(StateDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultStateCreateFunction(ApiRequestBuilder $builder, StateDraft $draft)
    {
        $request = $builder->with()->States()->post($draft);

        return $request->execute();
    }

    final public static function defaultStateDeleteFunction(ApiRequestBuilder $builder, State $resource)
    {
        $request = $builder->with()->States()->withId($resource->getId())->delete()->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftState(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultStateDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultStateCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultStateDeleteFunction'];
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

    final public static function withState(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftState(
            $builder,
            [__CLASS__, 'defaultStateDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftState(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultStateDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultStateCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultStateDeleteFunction'];
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

    final public static function withUpdateableState(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftState(
            $builder,
            [__CLASS__, 'defaultStateDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
