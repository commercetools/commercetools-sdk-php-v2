<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\AttributeDateTimeTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeMoneyTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueBuilder;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeReferenceTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeSetTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\Api\TaxCategory\TaxCategoryFixture;
use Commercetools\IntegrationTest\ApiTestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEmpty;

class ProductTypeCreationDemoTest extends ApiTestCase
{
    public const ISBN_ATTR_NAME = "AttributeTutorialIsbn";
    public const BOOK_PRODUCT_TYPE_NAME = "book-product-type-tutorial";
    public const COLOR_ATTR_NAME = "AttributeTutorialColor";
    public const SIZE_ATTR_NAME = "AttributeTutorialSize";
    public const LAUNDRY_SYMBOLS_ATTR_NAME = "AttributeTutorialLaundrySymbols";
    public const MATCHING_PRODUCTS_ATTR_NAME = "AttributeTutorialMatchingProducts";
    public const RRP_ATTR_NAME = "AttributeTutorialRrp";
    public const AVAILABLE_SINCE_ATTR_NAME = "AttributeTutorialAvailableSince";
    public const PRODUCT_TYPE_NAME = "t-shirt-product-attribute-tutorial";

    public function setUp(): void
    {
        $builder = $this->getApiBuilder();
        ProductTypeFixture::deleteProductAndProductTypes($builder, self::BOOK_PRODUCT_TYPE_NAME);
    }

    public function createBookProductTypeDraft()
    {
        $isbn = AttributeDefinitionBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName(self::ISBN_ATTR_NAME)
            ->withLabel(LocalizedStringBuilder::of()->put('en', 'ISBN')->build())
            ->withIsRequired(false)
            ->build();

        return $bookProductTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey(uniqid())
            ->withName(self::BOOK_PRODUCT_TYPE_NAME)
            ->withDescription("books")
            ->withAttributes(AttributeDefinitionDraftCollection::fromArray([$isbn]))
            ->build();
    }

    public function createTShirtProductTypeDraft()
    {
        $green = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("green")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "green", "de" => "grün"])->build())
                    ->build();
        $red = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("red")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "red", "de" => "rot"])->build())
                    ->build();
        $color = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::COLOR_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "color"])->build())
                    ->withType(AttributeLocalizedEnumTypeBuilder::of()
                                ->withValues(AttributeLocalizedEnumValueCollection::fromArray([$green, $red]))
                                ->build())
                    ->withIsRequired(true)
                    ->build();
        $small = AttributePlainEnumValueBuilder::of()
                    ->withKey("S")
                    ->withLabel("S")
                    ->build();
        $medium = AttributePlainEnumValueBuilder::of()
                    ->withKey("M")
                    ->withLabel("M")
                    ->build();
        $sizeX = AttributePlainEnumValueBuilder::of()
                    ->withKey("X")
                    ->withLabel("X")
                    ->build();
        $size = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::SIZE_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Size"])->build())
                    ->withType(AttributeEnumTypeBuilder::of()
                                    ->withValues(AttributePlainEnumValueCollection::fromArray([$small, $medium, $sizeX]))
                                    ->build())
                    ->withIsRequired(true)
                    ->build();
        $cold = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("cold")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Wash at or below 30°C ", "de" => "30°C"])->build())
                    ->build();
        $hot = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("hot")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Wash at or below 60°C", "de" => "60°C"])->build())
                    ->build();
        $tumbleDrying = AttributeLocalizedEnumValueBuilder::of()
                            ->withKey("tumbleDrying")
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Tumble Drying", "de" => "Trommeltrocknen"])->build())
                            ->build();
        $noTumbleDrying = AttributeLocalizedEnumValueBuilder::of()
                            ->withKey("noTumbleDrying")
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "no tumble drying", "de" => "Nicht im Trommeltrockner trocknen"])->build())
                            ->build();
        $laundryLabelType = AttributeSetTypeBuilder::of()
                                ->withElementType(AttributeLocalizedEnumTypeBuilder::of()
                                                    ->withValues(AttributeLocalizedEnumValueCollection::fromArray([$cold, $hot, $tumbleDrying, $noTumbleDrying]))
                                                    ->build())
                                ->build();
        $laundrySymbols = AttributeDefinitionDraftBuilder::of()
                            ->withType($laundryLabelType)
                            ->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "washing labels"])->build())
                            ->withIsRequired(false)
                            ->build();

        $matchingProducts = AttributeDefinitionDraftBuilder::of()
                                ->withName(self::MATCHING_PRODUCTS_ATTR_NAME)
                                ->withLabel(LocalizedStringBuilder::fromArray(["en" => "matching products"])->build())
                                ->withType(AttributeSetTypeBuilder::of()
                                            ->withElementType(AttributeReferenceTypeBuilder::of()
                                                                ->withReferenceTypeId("product")
                                                                ->build())
                                            ->build())
                                ->withIsRequired(false)
                                ->build();
        $rrp = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::RRP_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "recommended retail price"])->build())
                    ->withType(AttributeMoneyTypeBuilder::of()->build())
                    ->withIsRequired(false)
                    ->build();
        $availableSince = AttributeDefinitionDraftBuilder::of()
                            ->withName(self::AVAILABLE_SINCE_ATTR_NAME)
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "available since"])->build())
                            ->withType(AttributeDateTimeTypeBuilder::of()->build())
                            ->withIsRequired(false)
                            ->build();
        $attributes = AttributeDefinitionDraftCollection::fromArray([$color, $size, $laundrySymbols, $matchingProducts, $rrp, $availableSince]);

        return $productTypeDraft = ProductTypeDraftBuilder::of()
                                ->withKey(ProductTypeFixture::uniqueProductTypeString())
                                ->withName(self::PRODUCT_TYPE_NAME)
                                ->withDescription("a 'T' shaped cloth")
                                ->withAttributes($attributes)
                                ->build();
    }

    public function testCreateBookProductType()
    {
        $builder = $this->getApiBuilder();

        $bookProductTypeDraft = $this->createBookProductTypeDraft();

        $bookProductType = $builder
            ->with()
            ->productTypes()
            ->post($bookProductTypeDraft)
            ->execute();

        $request = $builder
            ->with()
            ->productTypes()
            ->withKey($bookProductType->getKey())
            ->get();

        $bookProductTypeQueryResponse = $request->execute();
        $this->assertSame($bookProductType->getName(), $bookProductTypeQueryResponse->getName());
        $this->assertSame($bookProductType->getKey(), $bookProductTypeQueryResponse->getKey());
        $this->assertSame(1, $bookProductTypeQueryResponse->getVersion());
    }

    public function testCreateTShirtProductType()
    {
        $builder = $this->getApiBuilder();

        $productTypeDraft = $this->createTShirtProductTypeDraft();

        $productType = $builder
            ->with()
            ->productTypes()
            ->post($productTypeDraft)
            ->execute();

        $request = $builder
            ->with()
            ->productTypes()
            ->withId($productType->getId())
            ->get();
        $productTypeQueryResponse = $request->execute();
        $this->assertSame($productType->getName(), $productTypeQueryResponse->getName());
        $this->assertSame($productType->getId(), $productTypeQueryResponse->getId());
        $this->assertSame(1, $productTypeQueryResponse->getVersion());
    }

    public function testCreateProduct()
    {
        $builder = $this->getApiBuilder();
        $productType = ProductTypeFixture::defaultProductType($builder, self::BOOK_PRODUCT_TYPE_NAME);

        $product = ProductFixture::createProduct($builder, $productType);

        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();
        assertNotEmpty($masterVariant);
        assertEquals($productType->getId(), $product->getProductType()->getId());
    }
}
