<?php

namespace Commercetools\IntegrationTest\Api\Order;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderFromCartDraft;
use Commercetools\Api\Models\Order\OrderFromCartDraftBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class OrderFixture
{
    final public static function uniqueOrderString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultOrderFromCartDraftFunction(Cart $cart): OrderFromCartDraftBuilder
    {
        $builder = OrderFromCartDraftBuilder::of();
        $builder
            ->withCart(
                CartResourceIdentifierBuilder::of()
                    ->withId($cart->getId())
                    ->build()
            )
            ->withVersion($cart->getVersion());

        return $builder;
    }

    final public static function defaultOrderFromCartDraftBuilderFunction(OrderFromCartDraftBuilder $draftBuilder): OrderFromCartDraft
    {
        return $draftBuilder->build();
    }

    final public static function defaultOrderCreateFunction(ApiRequestBuilder $builder, OrderFromCartDraft $draft)
    {
        $request = $builder->with()->orders()->post($draft);

        return $request->execute();
    }

    final public static function defaultOrderDeleteFunction(ApiRequestBuilder $builder, Order $resource)
    {
        $request = $builder
            ->with()
            ->orders()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftOrder(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultOrderFromCartDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultOrderCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultOrderDeleteFunction'];
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

    final public static function withOrder(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftOrder(
            $builder,
            [__CLASS__, 'defaultOrderFromCartDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableCartDraftOrder(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultOrderFromCartDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultOrderCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultOrderDeleteFunction'];
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

    final public static function withUpdateableOrder(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableCartDraftOrder(
            $builder,
            [__CLASS__, 'defaultOrderFromCartDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
