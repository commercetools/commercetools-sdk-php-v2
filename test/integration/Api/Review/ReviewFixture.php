<?php


namespace Commercetools\IntegrationTest\Api\Review;


use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewDraft;
use Commercetools\Api\Models\Review\ReviewDraftBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class ReviewFixture
{
    final public static function uniqueReviewString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultReviewDraftFunction()
    {
        $builder = ReviewDraftBuilder::of();
        $uniqueReviewString = self::uniqueReviewString();
        $builder->withTitle('test-' . $uniqueReviewString . '-title')
            ->withKey('test-' . $uniqueReviewString . '-key');

        return $builder;
    }

    final public static function defaultReviewDraftBuilderFunction(ReviewDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultReviewCreateFunction(ApiRequestBuilder $builder, ReviewDraft $draft)
    {
        $request = $builder->with()->reviews()->post($draft);

        return $request->execute();
    }

    final public static function defaultReviewDeleteFunction(ApiRequestBuilder $builder, Review $resource)
    {
        $request = $builder->with()->reviews()->withId($resource->getId())->delete()->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftReview(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultReviewDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultReviewCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultReviewDeleteFunction'];
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

    final public static function withReview(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftReview(
            $builder,
            [__CLASS__, 'defaultReviewDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftReview(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultReviewDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultReviewCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultReviewDeleteFunction'];
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

    final public static function withUpdateableReview(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftReview(
            $builder,
            [__CLASS__, 'defaultReviewDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
