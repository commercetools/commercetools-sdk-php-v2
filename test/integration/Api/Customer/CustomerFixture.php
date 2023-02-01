<?php


namespace Commercetools\IntegrationTest\Api\Customer;

use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerDraft;
use Commercetools\Api\Models\Customer\CustomerDraftBuilder;
use Commercetools\Api\Models\Customer\CustomerSignInResult;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class CustomerFixture
{
    final public static function uniqueCustomerString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultCustomerDraftFunction()
    {
        $builder = CustomerDraftBuilder::of();
        $builder
            ->withFirstName('test-' . self::uniqueCustomerString() . '-name')
            ->withLastName('test-' . self::uniqueCustomerString() . '-lastName')
            ->withEmail('TEST-' . self::uniqueCustomerString() . '-em.ail+sphere@example.org')
            ->withPassword('test-' . self::uniqueCustomerString() . '-password');

        return $builder;
    }

    final public static function defaultCustomerDraftBuilderFunction(CustomerDraftBuilder $draftBuilder): CustomerDraft
    {
        return $draftBuilder->build();
    }

    final public static function defaultCustomerCreateFunction(ApiRequestBuilder $builder, CustomerDraft $draft)
    {
        $request = $builder->with()->customers()->post($draft);

        return $request->execute();
    }

    final public static function defaultCustomerDeleteFunction(ApiRequestBuilder $builder, CustomerSignInResult $resource)
    {
        $request = $builder
            ->with()
            ->customers()
            ->withId($resource->getCustomer()->getId())
            ->delete()
            ->withVersion($resource->getCustomer()->getVersion());

        return $request->execute();
    }

    final public static function withDraftCustomer(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCustomerDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCustomerCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCustomerDeleteFunction'];
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

    final public static function withCustomer(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftCustomer(
            $builder,
            [__CLASS__, 'defaultCustomerDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdatableDraftCustomer(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCustomerDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCustomerCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCustomerDeleteFunction'];
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

    final public static function withUpdatableCustomer(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdatableDraftCustomer(
            $builder,
            [__CLASS__, 'defaultCustomerDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
