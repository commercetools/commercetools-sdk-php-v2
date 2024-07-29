<?php

namespace Commercetools\IntegrationTest\Api\TaxCategory;

use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\TaxCategory\TaxCategoryDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftCollection;
use Commercetools\Client\ApiRequestBuilder;
use Ramsey\Uuid\Uuid;

class TaxCategoryFixture
{
    public const RAND_MAX = 10000;

    final public static function uniqueTaxCategoryString()
    {
        return 'test-' . Uuid::uuid4();
    }

    public static function defaultTaxCategory(ApiRequestBuilder $builder)
    {
        $taxRateDraft = TaxRateDraftBuilder::of()
            ->withName(self::uniqueTaxCategoryString())
            ->withAmount(0.19)
            ->withIncludedInPrice(true)
            ->withCountry('DE')
            ->build();

        $taxCategoryDraft = TaxCategoryDraftBuilder::of()
            ->withName(self::uniqueTaxCategoryString())
            ->withKey(self::uniqueTaxCategoryString())
            ->withDescription(self::uniqueTaxCategoryString())
            ->withRates(new TaxRateDraftCollection([$taxRateDraft]))
            ->build();

        $taxCategory = $builder->taxCategories()
            ->post($taxCategoryDraft)
            ->execute();

        return $taxCategory;
    }

    final public static function defaultTaxCategoryDraftFunction()
    {
        $taxRateDraft = TaxRateDraftBuilder::of()
            ->withName(self::uniqueTaxCategoryString())
            ->withAmount(0.19)
            ->withIncludedInPrice(true)
            ->withCountry('DE')
            ->build();

        $builder = TaxCategoryDraftBuilder::of();
        $builder
            ->withName(self::uniqueTaxCategoryString())
            ->withKey(self::uniqueTaxCategoryString())
            ->withDescription(self::uniqueTaxCategoryString())
            ->withRates(new TaxRateDraftCollection([$taxRateDraft]));

        return $builder;
    }

    final public static function defaultTaxCategoryDraftBuilderFunction(TaxCategoryDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function defaultTaxCategoryCreateFunction(ApiRequestBuilder $builder, TaxCategoryDraft $draft)
    {
        $request = $builder->with()->taxCategories()->post($draft);

        return $request->execute();
    }

    final public static function defaultTaxCategoryDeleteFunction(ApiRequestBuilder $builder, TaxCategory $resource)
    {
        $request = $builder
            ->with()
            ->taxCategories()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftTaxCategory(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultTaxCategoryDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultTaxCategoryCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultTaxCategoryDeleteFunction'];
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

    final public static function withTaxCategory(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftTaxCategory(
            $builder,
            [__CLASS__, 'defaultTaxCategoryDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftTaxCategory(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultTaxCategoryDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultTaxCategoryCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultTaxCategoryDeleteFunction'];
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

    final public static function withUpdateableTaxCategory(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftTaxCategory(
            $builder,
            [__CLASS__, 'defaultTaxCategoryDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
