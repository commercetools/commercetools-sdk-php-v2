<?php

namespace Commercetools\IntegrationTest\Api\Cart;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartDraft;
use Commercetools\Api\Models\Cart\CartDraftBuilder;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class CartFixture
{
    final public static function uniqueCartString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultCartDraftFunction()
    {
        $builder = CartDraftBuilder::of();
        $builder
            ->withCurrency('EUR')
            ->withCountry('DE')
            ->withShippingAddress(
                AddressBuilder::of()
                    ->withCountry('DE')
                    ->build()
            );

        return $builder;
    }

    final public static function defaultCartDraftBuilderFunction(CartDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultCartCreateFunction(ApiRequestBuilder $builder, CartDraft $draft)
    {
        $request = $builder->with()->carts()->post($draft);

        return $request->execute();
    }

    final public static function defaultCartDeleteFunction(ApiRequestBuilder $builder, Cart $resource)
    {
        $request = $builder
            ->with()
            ->carts()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftCart(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCartDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCartCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCartDeleteFunction'];
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

    final public static function withCart(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftCart(
            $builder,
            [__CLASS__, 'defaultCartDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftCart(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCartDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCartCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCartDeleteFunction'];
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

    final public static function withUpdateableCart(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftCart(
            $builder,
            [__CLASS__, 'defaultCartDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
