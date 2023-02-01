<?php


namespace Commercetools\IntegrationTest\Api\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountDraft;
use Commercetools\Api\Models\CartDiscount\CartDiscountDraftBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountLineItemsTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountLineItemsTargetBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueRelativeDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class CartDiscountFixture
{
    public const RAND_MAX = 10000;

    final public static function uniqueCategoryString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultCartDiscountDraftFunction()
    {
        $builder = CartDiscountDraftBuilder::of();
        $uniqueCategoryString = self::uniqueCategoryString();
        $builder
            ->withName(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString)->build())
            ->withKey($uniqueCategoryString)
            ->withCartPredicate("true")
            ->withTarget(
                CartDiscountLineItemsTargetBuilder::of()
                    ->withPredicate("true")
                    ->build()
            )
            ->withRequiresDiscountCode(false)
            ->withSortOrder('0.9' . trim((string)mt_rand(1, self::RAND_MAX), '0'))
            ->withIsActive(true)
            ->withValue(
                CartDiscountValueRelativeDraftBuilder::of()
                    ->withPermyriad(1000)
                    ->build()
            )
        ;

        return $builder;
    }

    final public static function defaultCartDiscountDraftBuilderFunction(CartDiscountDraftBuilder $draftBuilder): CartDiscountDraft
    {
        return $draftBuilder->build();
    }

    final public static function defaultCartDiscountCreateFunction(ApiRequestBuilder $builder, CartDiscountDraft $draft)
    {
        $request = $builder->with()->cartDiscounts()->post($draft);

        return $request->execute();
    }

    final public static function defaultCartDiscountDeleteFunction(ApiRequestBuilder $builder, CartDiscount $resource)
    {
        $request = $builder
            ->with()
            ->cartDiscounts()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftCartDiscount(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCartDiscountDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCartDiscountCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCartDiscountDeleteFunction'];
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

    final public static function withCartDiscount(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftCartDiscount(
            $builder,
            [__CLASS__, 'defaultCartDiscountDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdatableDraftCartDiscount(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCartDiscountDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCartDiscountCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCartDiscountDeleteFunction'];
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

    final public static function withUpdatableCartDiscount(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdatableDraftCartDiscount(
            $builder,
            [__CLASS__, 'defaultCartDiscountDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
