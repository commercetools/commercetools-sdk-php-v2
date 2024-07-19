<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\AttributeDateTimeTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionCollection;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumType;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueBuilder;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeMoneyTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueBuilder;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueCollection;
use Commercetools\Api\Models\ProductType\AttributeReferenceType;
use Commercetools\Api\Models\ProductType\AttributeReferenceTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeSetTypeBuilder;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\ApiTestCase;

class ProductTypeCreationDemoTest extends ApiTestCase
{
    const ISBN_ATTR_NAME = "AttributeTutorialIsbn";
    const BOOK_PRODUCT_TYPE_NAME = "book-product-attribute-tutorial";
    const COLOR_ATTR_NAME = "AttributeTutorialColor";
    const SIZE_ATTR_NAME = "AttributeTutorialSize";
    const LAUNDRY_SYMBOLS_ATTR_NAME = "AttributeTutorialLaundrySymbols";
    const MATCHING_PRODUCTS_ATTR_NAME = "AttributeTutorialMatchingProducts";
    const RRP_ATTR_NAME = "AttributeTutorialRrp";
    const AVAILABLE_SINCE_ATTR_NAME = "AttributeTutorialAvailableSince";
    const PRODUCT_TYPE_NAME = "t-shirt-product-attribute-tutorial";
    public function createBookProductType()
    {
        $isbn = AttributeDefinitionBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName(self::ISBN_ATTR_NAME)
            ->withLabel(LocalizedStringBuilder::of("ISBN")->build())
            ->withIsRequired(false)
            ->build();

        return $bookProductType = ProductTypeBuilder::of()
            ->withName(self::BOOK_PRODUCT_TYPE_NAME)
            ->withDescription("books")
            ->withAttributes(AttributeDefinitionCollection::of()->add($isbn))
            ->build();
    }

    public function testCreateBookProductType()
    {
        $builder = $this->getApiBuilder();

        $bookProductType = $this->createBookProductType();

        $request = $builder
            ->with()
            ->productTypes()
            ->withId($bookProductType->getId())
            ->get();
        $productTypeQueryResponse = $request->execute();
        $this->assertSame($bookProductType->getName(), $productTypeQueryResponse->getName());
        $this->assertSame($bookProductType->getId(), $productTypeQueryResponse->getId());
        $this->assertSame(1, $productTypeQueryResponse->getVersion());
    }

    public function createProductType()
    {
        $green = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("green")
                    ->withLabel(LocalizedStringBuilder::of(["en" => "green", "de" => "grün"])->build())
                    ->build();
        $red = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("red")
                    ->withLabel(LocalizedStringBuilder::of(["en" => "red", "de" => "rot"])->build())
                    ->build();
        $color = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::COLOR_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::of(["en" =>"color"])->build())
                    ->withType(AttributeLocalizedEnumTypeBuilder::of()
                                ->withValues([$green, $red])
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
                    ->withLabel(LocalizedStringBuilder::of(["en" => "Size"])->build())
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
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "washing labels"]))
                            ->withIsRequired(false)
                            ->build();

        $matchingProducts = AttributeDefinitionDraftBuilder::of()
                                ->withName(self::MATCHING_PRODUCTS_ATTR_NAME)
                                ->withLabel(LocalizedStringBuilder::fromArray(["en" => "matching products"]))
                                ->withType(AttributeSetTypeBuilder::of()
                                            ->withElementType(AttributeReferenceTypeBuilder::of()
                                                                ->withReferenceTypeId("product")
                                                                ->build()))
                                ->withIsRequired(false)
                                ->build();
        $rrp = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::RRP_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "recommended retail price"]))
                    ->withType(AttributeMoneyTypeBuilder::of())
                    ->withIsRequired(false)
                    ->build();
        $availableSince = AttributeDefinitionDraftBuilder::of()
                            ->withName(self::AVAILABLE_SINCE_ATTR_NAME)
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "available since"]))
                            ->withType(AttributeDateTimeTypeBuilder::of())
                            ->withIsRequired(false)
                            ->build();
        $attributes = AttributeDefinitionDraftCollection::fromArray([$color, $size, $laundrySymbols, $matchingProducts, $rrp, $availableSince]);

        $productTypeDraft = ProductTypeDraftBuilder::of()
                                ->withKey(random_int())
                                ->withName(self::PRODUCT_TYPE_NAME)
                                ->withDescription("a 'T' shaped cloth")
                                ->withAttributes($attributes)
                                ->build();

    }

    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        ProductTypeFixture::withProductType(
            $builder,
            function (ProductType $productType) use ($builder) {
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
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        ProductTypeFixture::withProductType(
            $builder,
            function (ProductType $productType) use ($builder) {
                $request = $builder
                    ->with()
                    ->productTypes()
                    ->withKey($productType->getKey())
                    ->delete()
                    ->withVersion($productType->getVersion());
                $productTypeQueryResponse = $request->execute();

                $this->assertSame($productType->getId(), $productTypeQueryResponse->getId());
                $this->assertInstanceOf(ProductType::class, $productTypeQueryResponse);

                $request = $builder->with()->productTypes()->withKey($productType->getKey())->get();
                $request->execute();
            }
        );
    }
}
