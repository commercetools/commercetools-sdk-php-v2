<?php

namespace Commercetools\IntegrationTest\Api\Product;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftBuilder as PriceDraftBuilder;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeBuilder;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductDraft;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Product\ProductResourceIdentifierBuilder;
use Commercetools\Api\Models\Product\ProductUnpublishActionModel;
use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Api\Models\Product\ProductUpdateBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueBuilder;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\TaxCategory\TaxCategoryDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\Api\ProductType\ProductTypeFixture;
use Commercetools\IntegrationTest\Api\TaxCategory\TaxCategoryFixture;
use Commercetools\IntegrationTest\ApiTestCase;
use Monolog\DateTimeImmutable;
use Ramsey\Uuid\Uuid;
use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEmpty;

class ProductFixture
{
    public const COLOR_ATTR_NAME = "AttributeTutorialColor";
    public const SIZE_ATTR_NAME = "AttributeTutorialSize";
    public const MATCHING_PRODUCTS_ATTR_NAME = "AttributeTutorialMatchingProducts";
    public const LAUNDRY_SYMBOLS_ATTR_NAME = "AttributeTutorialLaundrySymbols";
    public const RRP_ATTR_NAME = "AttributeTutorialRrp";
    public const AVAILABLE_SINCE_ATTR_NAME = "AttributeTutorialAvailableSince";
    public const ISBN_ATTR_NAME = "AttributeTutorialIsbn";

    final public static function uniqueProductString()
    {
        return 'test-' . Uuid::uuid4();
    }

    public static function referenceableProduct(ApiRequestBuilder $builder): Product
    {
        $productType = ProductTypeFixture::defaultProductType($builder);
        $productVariantDraft = ProductVariantDraftBuilder::of()
                                ->withPrices(PriceDraftCollection::of()->add(self::priceDraft()))
                                ->build();

        $slugEn = LocalizedStringBuilder::of()->put("en", "referenceable-product-2")->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withName($slugEn)
            ->withSlug($slugEn)
            ->withVariants(ProductVariantDraftCollection::of()->add($productVariantDraft))
            ->withProductType($productTypeResourceIdentifier)
            ->build();
        $queryParam = sprintf('masterData(staged(slug(en="%s")))', $slugEn->at("en"));
        $product = $builder->products()
            ->get()
            ->withQueryParam("where", $queryParam)
            ->execute();

        $existingProduct = $product->getResults()->current();

        if ($existingProduct === null) {
            $createdProduct = $builder->products()
                ->post($productDraft)
                ->execute();
            return $createdProduct;
        }

        return $existingProduct;
    }

    public static function createProduct(ApiRequestBuilder $builder, ProductType $productType)
    {
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes(AttributeCollection::of()
                ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
                ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
                ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue("cold")->withValue("tumbleDrying")->build())
                ->add(AttributeBuilder::of()->withName(self::MATCHING_PRODUCTS_ATTR_NAME)->withValue("product-reference")->build())
                ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCurrencyCode("EUR")->withCentAmount(300))->build())
                ->add(AttributeBuilder::of()->withName(self::AVAILABLE_SINCE_ATTR_NAME)->withValue(new \DateTime())->build()))
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withKey(self::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withVariants(ProductVariantDraftCollection::of()->add($productVariantDraft))
            ->build();

        $product = $builder->products()
                    ->post($productDraft)
                    ->execute();

        return $product;
    }

    public static function priceDraft(): PriceDraft
    {
        return PriceDraftBuilder::of()
            ->withValue(MoneyBuilder::of()
                ->withCentAmount(1234)
                ->withCurrencyCode("EUR")
                ->build())
            ->withCountry("DE")
            ->build();
    }

    public function createBookProduct(ApiRequestBuilder $builder, string $name)
    {
        $priceDraft = PriceDraftBuilder::of()
            ->withValue(
                MoneyBuilder::of()
                    ->withCentAmount(100)
                    ->withCurrencyCode('EUR')
                    ->build()
            )
            ->build();
        $productType = ProductTypeFixture::createProductType($builder, $name);

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withSku(ProductFixture::uniqueProductString())
            ->withPrices(new PriceDraftCollection([$priceDraft]))
            ->withAttributes(AttributeCollection::of()->add(AttributeBuilder::of()->withName(self::ISBN_ATTR_NAME)->withValue("978-3-86680-192-9")))
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withKey($productType->getKey())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withKey(ProductFixture::uniqueProductString())
            ->withName(LocalizedStringBuilder::fromArray(["en" => "a book"])->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();
        return $product = $builder->products()
            ->post($productDraft)
            ->execute();
    }

    final public static function getAttributesDefinitionDraftCollection(): AttributeDefinitionDraftCollection
    {
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName('test-text')
            ->withLabel(LocalizedStringBuilder::of()->put('en', 'test-text')->build())
            ->withIsRequired(false)
            ->withAttributeConstraint('None')
            ->withInputHint('SingleLine')
            ->withIsSearchable(false)
            ->build();

        return new AttributeDefinitionDraftCollection([$attributeDefinitionDraft]);
    }

    final public static function defaultProductDraftFunction($productTypeResourceIdentifier, $taxCategoryResourceIdentifier)
    {
        $priceDraft = PriceDraftBuilder::of()
            ->withValue(
                MoneyBuilder::of()
                    ->withCentAmount(100)
                    ->withCurrencyCode('EUR')
                    ->build()
            )
            ->build();

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withSku(self::uniqueProductString())
            ->withPrices(new PriceDraftCollection([$priceDraft]))
            ->build();

        $builder = ProductDraftBuilder::of();
        $builder->withKey(self::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withProductType($productTypeResourceIdentifier)
            ->withSlug(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withDescription(LocalizedStringBuilder::of()->put('en', self::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->withTaxCategory($taxCategoryResourceIdentifier);

        return $builder;
    }

    final public static function defaultProductDraftBuilderFunction(ProductDraftBuilder $draftBuilder)
    {
        return $draftBuilder->build();
    }

    final public static function publishedProductDraftBuilderFunction(ProductDraftBuilder $draftBuilder)
    {
        return $draftBuilder->withPublish(true)->build();
    }

    final public static function defaultProductCreateFunction(ApiRequestBuilder $builder, ProductDraft $draft)
    {
        $request = $builder->with()->products()->post($draft);

        return $request->execute();
    }

    final public static function defaultProductDeleteFunction(ApiRequestBuilder $builder, Product $resource)
    {
        $updateAction = new ProductUnpublishActionModel();

        $updateActionCollection = new ProductUpdateActionCollection();
        $updateActionCollection->add($updateAction);
        $resourceUpdate = ProductUpdateBuilder::of()
            ->withVersion($resource->getVersion())
            ->withActions($updateActionCollection)
            ->build();
        $request = $builder
            ->with()
            ->products()
            ->withId($resource->getId())
            ->post($resourceUpdate);
        try {
            $resource = $request->execute();
        } catch (NotFoundException $e) {
            return null;
        }

        $request = $builder
            ->with()
            ->products()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withDraftProduct(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        ProductTypeFixture::withDraftProductType(
            $builder,
            function (ProductTypeDraftBuilder $draftBuilder) {
                $draftBuilder->withAttributes(self::getAttributesDefinitionDraftCollection())->build();

                return $draftBuilder->build();
            },
            function (ProductType $productType) use (
                $builder,
                $draftBuilderFunction,
                $assertFunction,
                $createFunction,
                $deleteFunction,
                $draftFunction
            ) {
                TaxCategoryFixture::withTaxCategory(
                    $builder,
                    function (TaxCategory $taxCategory) use (
                        $builder,
                        $productType,
                        $draftBuilderFunction,
                        $assertFunction,
                        $createFunction,
                        $deleteFunction,
                        $draftFunction
                    ) {
                        $taxCategoryResourceIdentifier = TaxCategoryResourceIdentifierBuilder::of()
                            ->withId($taxCategory->getId())
                            ->build();
                        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
                            ->withId($productType->getId())
                            ->build();
                        if ($draftFunction == null) {
                            $draftFunction = function () use ($productTypeResourceIdentifier, $taxCategoryResourceIdentifier) {
                                return call_user_func(
                                    [__CLASS__, 'defaultProductDraftFunction'],
                                    $productTypeResourceIdentifier,
                                    $taxCategoryResourceIdentifier
                                );
                            };
                        } else {
                            $draftFunction = function () use (
                                $productTypeResourceIdentifier,
                                $taxCategoryResourceIdentifier,
                                $draftFunction
                            ) {
                                return call_user_func($draftFunction, $productTypeResourceIdentifier, $taxCategoryResourceIdentifier);
                            };
                        }
                        if ($createFunction == null) {
                            $createFunction = [__CLASS__, 'defaultProductCreateFunction'];
                        }
                        if ($deleteFunction == null) {
                            $deleteFunction = [__CLASS__, 'defaultProductDeleteFunction'];
                        }
                        $initialDraft = call_user_func($draftFunction);

                        $resourceDraft = call_user_func($draftBuilderFunction, $initialDraft);

                        $resource = call_user_func(
                            $createFunction,
                            $builder,
                            $resourceDraft,
                            [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]
                        );
                        try {
                            call_user_func($assertFunction, $resource, [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]);
                        } finally {
                            call_user_func($deleteFunction, $builder, $resource);
                        }
                    }
                );
            }
        );
    }

    final public static function withProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftProduct(
            $builder,
            [__CLASS__, 'defaultProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withPublishedProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withDraftProduct(
            $builder,
            [__CLASS__, 'publishedProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateableDraftProduct(
        ApiRequestBuilder $builder,
        callable $draftBuilderFunction,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        ProductTypeFixture::withDraftProductType(
            $builder,
            function (ProductTypeDraftBuilder $draftBuilder) {
                $draftBuilder->withAttributes(self::getAttributesDefinitionDraftCollection())->build();

                return $draftBuilder->build();
            },
            function (ProductType $productType) use (
                $builder,
                $draftBuilderFunction,
                $assertFunction,
                $createFunction,
                $deleteFunction,
                $draftFunction
            ) {
                TaxCategoryFixture::withTaxCategory(
                    $builder,
                    function (TaxCategory $taxCategory) use (
                        $builder,
                        $productType,
                        $draftBuilderFunction,
                        $assertFunction,
                        $createFunction,
                        $deleteFunction,
                        $draftFunction
                    ) {
                        $taxCategoryResourceIdentifier = TaxCategoryResourceIdentifierBuilder::of()
                            ->withId($taxCategory->getId())
                            ->build();
                        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
                            ->withId($productType->getId())
                            ->build();
                        if ($draftFunction == null) {
                            $draftFunction = function () use ($productTypeResourceIdentifier, $taxCategoryResourceIdentifier) {
                                return call_user_func(
                                    [__CLASS__, 'defaultProductDraftFunction'],
                                    $productTypeResourceIdentifier,
                                    $taxCategoryResourceIdentifier
                                );
                            };
                        } else {
                            $draftFunction = function () use (
                                $productTypeResourceIdentifier,
                                $taxCategoryResourceIdentifier,
                                $draftFunction
                            ) {
                                return call_user_func($draftFunction, $productTypeResourceIdentifier, $taxCategoryResourceIdentifier);
                            };
                        }
                        if ($createFunction == null) {
                            $createFunction = [__CLASS__, 'defaultProductCreateFunction'];
                        }
                        if ($deleteFunction == null) {
                            $deleteFunction = [__CLASS__, 'defaultProductDeleteFunction'];
                        }
                        $initialDraft = call_user_func($draftFunction);

                        $resourceDraft = call_user_func($draftBuilderFunction, $initialDraft);

                        $resource = call_user_func(
                            $createFunction,
                            $builder,
                            $resourceDraft,
                            [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]
                        );
                        $updatedResource = null;
                        try {
                            $updatedResource = call_user_func($assertFunction, $resource, [$productTypeResourceIdentifier, $taxCategoryResourceIdentifier]);
                        } finally {
                            call_user_func($deleteFunction, $builder, $updatedResource != null ? $updatedResource : $resource);
                        }
                    }
                );
            }
        );
    }

    final public static function withUpdateableProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftProduct(
            $builder,
            [__CLASS__, 'defaultProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }

    final public static function withUpdateablePublishedProduct(
        ApiRequestBuilder $builder,
        callable $assertFunction,
        callable $createFunction = null,
        callable $deleteFunction = null,
        callable $draftFunction = null
    ) {
        self::withUpdateableDraftProduct(
            $builder,
            [__CLASS__, 'publishedProductDraftBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $draftFunction
        );
    }
}
