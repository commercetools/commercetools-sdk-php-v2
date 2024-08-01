<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\ProductUnpublishActionBuilder;
use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Api\Models\Product\ProductUpdateBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeDraft;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Api\Models\ProductType\ProductTypePagedQueryResponse;
use Commercetools\Api\Models\ProductType\ProductTypePagedQueryResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Exception\NotFoundException;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceBuilder;
use Exception;
use Ramsey\Uuid\Uuid;

class ProductTypeFixture
{
    final public static function uniqueProductTypeString(): string
    {
        return 'test-' . Uuid::uuid4();
    }

    public static function deleteProductAndProductTypes(ApiRequestBuilder $builder, string $name): void
    {
        $bookProductTypeQueryResponse = $builder
            ->with()
            ->productTypes()
            ->get()
            ->withQueryParam("name", $name)
            ->execute();
        $bookProductType = $bookProductTypeQueryResponse->getResults()->current();

        if (!is_null($bookProductType)) {
            $products = $builder
                ->with()
                ->products()
                ->get()
                ->withQueryParam("typeId", $bookProductType->getId())
                ->execute()
                ->getResults();

            foreach ($products as $product) {
                $unpublishedProduct = $builder->with()->products()->withId($product->getId())
                    ->post(
                        ProductUpdateBuilder::of()
                            ->withVersion($product->getVersion())
                            ->withActions(
                                ProductUpdateActionCollection::of()->add(ProductUnpublishActionBuilder::of()->build())
                            )->build()
                    );
                $product = $unpublishedProduct->execute();

                $builder->products()
                    ->withId($product->getId())
                    ->delete()
                    ->withVersion($product->getVersion())
                    ->execute();
            }

            $builder
                ->productTypes()
                ->withKey($bookProductType->getKey())
                ->delete()
                ->withVersion($bookProductType->getVersion())
                ->execute();
        }
    }

    public static function defaultProductType(ApiRequestBuilder $builder, string $name = null): ProductType
    {
        $name = $name ?? "referenceable-product-1";

        $productType = self::fetchProductTypeByName($builder, $name);
        if (is_null($productType)) {
            $productType = self::createProductType($builder, $name);
        }

        return $productType;
    }

    public static function fetchProductTypeByName(ApiRequestBuilder $builder, string $name): ?ProductType
    {
        $productType = $builder
            ->with()
            ->productTypes()
            ->get()
            ->withQueryParam('where', 'name="' . $name . '"')
            ->execute();

        return $productType->getResults()->current() ?: null;
    }

    public static function createProductType(ApiRequestBuilder $builder, string $name): ?ProductType
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName($name)
            ->withLabel(LocalizedStringBuilder::of()->put('en', $name)->build())
            ->withIsRequired(true)
            ->build();

        $productTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey(self::uniqueProductTypeString())
            ->withName($name)
            ->withDescription(self::uniqueProductTypeString())
            ->withAttributes(new AttributeDefinitionDraftCollection([$attributeDefinitionDraft]))
            ->build();

        $productType = $builder->productTypes()
            ->post($productTypeDraft)
            ->execute();

        return $productType;
    }

    public function createProductTypeDraftWithAttribute()
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withName(ProductTypeFixture::uniqueProductTypeString())
            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "random-label"])->build())
            ->withType(AttributeLocalizedEnumTypeBuilder::of()
                ->withValues(AttributeLocalizedEnumValueCollection::fromArray(["random-type1", "random-type2"]))
                ->build())
            ->withAttributeConstraint(ProductTypeFixture::uniqueProductTypeString())
            ->withInputHint("SingleLine")
            ->withIsSearchable(true)
            ->withIsRequired(true)
            ->build();

        return $productTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey(ProductTypeFixture::uniqueProductTypeString())
            ->withName(ProductTypeFixture::uniqueProductTypeString())
            ->withDescription(ProductTypeFixture::uniqueProductTypeString())
            ->withAttributes(AttributeDefinitionDraftCollection::fromArray([$attributeDefinitionDraft]))
            ->build();
    }

    final public static function defaultProductTypeDraftFunction(): ProductTypeDraftBuilder
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName('test-text')
            ->withLabel(LocalizedStringBuilder::of()->put('en', 'test-text')->build())
            ->withIsRequired(true)
            ->build();

        $builder = ProductTypeDraftBuilder::of();
        $builder->withKey(self::uniqueProductTypeString())
            ->withName(self::uniqueProductTypeString())
            ->withDescription(self::uniqueProductTypeString())
            ->withAttributes(new AttributeDefinitionDraftCollection([$attributeDefinitionDraft]));

        return $builder;
    }

    final public static function defaultProductTypeDraftBuilderFunction(ProductTypeDraftBuilder $draftBuilder): ProductTypeDraft
    {
        return $draftBuilder->build();
    }

    final public static function defaultProductTypeCreateFunction(ApiRequestBuilder $builder, ProductTypeDraft $draft)
    {
        $request = $builder->with()->productTypes()->post($draft);

        return $request->execute();
    }

    final public static function defaultProductTypeDeleteFunction(ApiRequestBuilder $builder, ProductType $resource)
    {
        $request = $builder
            ->with()
            ->productTypes()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftProductType(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultProductTypeDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultProductTypeCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultProductTypeDeleteFunction'];
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

    final public static function withProductType(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftProductType(
            $builder,
            [__CLASS__, 'defaultProductTypeDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftProductType(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null,
        array $additionalResources = []
    ) {
        if ($draftFunction == null) {
            $draftFunction = [__CLASS__, 'defaultProductTypeDraftFunction'];
        }
        if ($createFunction == null) {
            $createFunction = [__CLASS__, 'defaultProductTypeCreateFunction'];
        }
        if ($deleteFunction == null) {
            $deleteFunction = [__CLASS__, 'defaultProductTypeDeleteFunction'];
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

    final public static function withUpdateableProductType(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftProductType(
            $builder,
            [__CLASS__, 'defaultProductTypeDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
