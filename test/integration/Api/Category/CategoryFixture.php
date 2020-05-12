<?php

namespace Commercetools\IntegrationTest\Api\Category;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryDraftModel;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class CategoryFixture
{
    public const RAND_MAX = 10000;

    final public static function uniqueCategoryString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultCategoryDraftFunction()
    {
        $builder = CategoryDraftBuilder::of();
        $uniqueCategoryString = self::uniqueCategoryString();
        $builder->withNameBuilder(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString))
            ->withSlugBuilder(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString))
            ->withKey($uniqueCategoryString);

        return $builder;
    }

    final public static function defaultCategoryDraftBuilderFunction(CategoryDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultCategoryCreateFunction(ApiRequestBuilder $builder, CategoryDraftModel $draft)
    {
        $request = $builder->with()->categories()->post($draft);

        return $request->execute();
    }

    final public static function defaultCategoryDeleteFunction(ApiRequestBuilder $builder, Category $resource)
    {
        $request = $builder->with()->categories()->withId($resource->getId())->delete()->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftCategory(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCategoryDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCategoryCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCategoryDeleteFunction'];
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

    final public static function withCategory(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftCategory(
            $builder,
            [__CLASS__, 'defaultCategoryDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftCategory(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultCategoryDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultCategoryCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultCategoryDeleteFunction'];
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

    final public static function withUpdateableCategory(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftCategory(
            $builder,
            [__CLASS__, 'defaultCategoryDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
