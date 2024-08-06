<?php

namespace Commercetools\IntegrationTest\Api\ProductType;

use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Order\LineItemImportDraftBuilder;
use Commercetools\Api\Models\Order\LineItemImportDraftCollection;
use Commercetools\Api\Models\Order\OrderImportDraftBuilder;
use Commercetools\Api\Models\Order\ProductVariantImportDraftBuilder;
use Commercetools\Api\Models\Product\AttributeAccessor;
use Commercetools\Api\Models\Product\AttributeBuilder;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Product\ProductSetAttributeActionBuilder;
use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Api\Models\Product\ProductUpdateBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
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
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Core\Model\Order\OrderState;
use Commercetools\Exception\BadRequestException;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\ApiTestCase;
use function PHPUnit\Framework\assertEquals;

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

    public function createProduct(ApiRequestBuilder $builder)
    {
        $referenceableProduct = ProductFixture::referenceableProduct($builder);
        $productType = ProductTypeFixture::fetchProductTypeByName($builder, self::PRODUCT_TYPE_NAME);

        if (!$productType) {
            $productType = ProductTypeFixture::createProductType($builder, self::PRODUCT_TYPE_NAME);
        }

        $productReference = ProductReferenceBuilder::of()->withId($referenceableProduct->getId())->build();
        $datetime = new \DateTime('2015-02-02');
        $datetime = $datetime->format(\DateTime::ATOM);
        $attributes = AttributeCollection::of()
            ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
            ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
            ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build())
            ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCentAmount(300)->withCurrencyCode("EUR")->build())->build())
            ->add(AttributeBuilder::of()->withName(self::AVAILABLE_SINCE_ATTR_NAME)->withValue($datetime)->build())
            ->add(AttributeBuilder::of()->withName(self::MATCHING_PRODUCTS_ATTR_NAME)->withValue([$productReference])->build());
        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes($attributes)
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withKey(ProductFixture::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', 'basic shirt')->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();

        $product = $builder->products()
            ->post($productDraft)
            ->execute();

        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();

        assertEquals($product->getProductType()->getId(), $productType->getId());
        assertEquals(ProductTypeFixture::findAttribute($masterVariant->getAttributes(), self::COLOR_ATTR_NAME)->getValue()->key, "green");
        assertEquals(ProductTypeFixture::findAttribute($masterVariant->getAttributes(), self::SIZE_ATTR_NAME)->getValue()->key, "S");
        assertEquals(ProductTypeFixture::findAttribute($masterVariant->getAttributes(), self::LAUNDRY_SYMBOLS_ATTR_NAME)->getValue()[0]->label->en, "Wash at or below 30°C ");

        return $product;
    }

    public function createBookProduct(ApiRequestBuilder $builder)
    {
        $isbn = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName(self::ISBN_ATTR_NAME)
            ->withLabel(LocalizedStringBuilder::of()->put("en", "ISBN")->build())
            ->withIsRequired(false)
            ->build();
        $productTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey(ProductTypeFixture::uniqueProductTypeString())
            ->withName(self::BOOK_PRODUCT_TYPE_NAME)
            ->withDescription("books")
            ->withAttributes(AttributeDefinitionDraftCollection::of()
                                ->add($isbn))
            ->build();
        $productType = $builder->productTypes()
            ->post($productTypeDraft)
            ->execute();

        $attributes = AttributeCollection::of()
                        ->add(
                            AttributeBuilder::of()
                                ->withName(self::ISBN_ATTR_NAME)
                                ->withValue("978-3-86680-192-9")
                                ->build()
                        );
        $productVariantDraft = ProductVariantDraftBuilder::of()
                                ->withAttributes($attributes)
                                ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
                                            ->withId($productType->getId())
                                            ->build();
        $productDraft = ProductDraftBuilder::of()
                        ->withProductType($productTypeResourceIdentifier)
                        ->withName(LocalizedStringBuilder::of()->put("en", "a book")->build())
                        ->withSlug(LocalizedStringBuilder::of()->put("en", ProductTypeFixture::uniqueProductTypeString())->build())
                        ->withMasterVariant($productVariantDraft)
                        ->build();

        $product = $builder->products()
            ->post($productDraft)
            ->execute();
        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();

        assertEquals($product->getProductType()->getId(), $productType->getId());
        assertEquals(ProductTypeFixture::findAttribute($masterVariant->getAttributes(), self::ISBN_ATTR_NAME)->getValue(), "978-3-86680-192-9");

        return $product;
    }


    public function testInvalidTypeCausesException()
    {
        $builder = $this->getApiBuilder();
        $productTypeDraft = $this->createTShirtProductTypeDraft();
        $productType = $builder->productTypes()
            ->post($productTypeDraft)
            ->execute();
        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes(AttributeCollection::of()
                ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue(1)->build()))
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withName(LocalizedStringBuilder::of()->put("en", "basic shirt")->build())
            ->withSlug(LocalizedStringBuilder::of()->put("en", ProductTypeFixture::uniqueProductTypeString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();

        try {
            $builder->products()->post($productDraft)->execute();
        } catch (BadRequestException $e) {
            $this->assertEquals(400, $e->getCode());

            $responseBody = (string) $e->getResponse()->getBody();
            $response = json_decode($responseBody, true);

            $errors = $response['errors'];
            $invalidFieldErrorFound = false;
            foreach ($errors as $error) {
                if (isset($error['code']) && $error['code'] === 'InvalidField') {
                    $this->assertEquals(self::COLOR_ATTR_NAME, $error['field']);
                    $this->assertEquals(1, $error['invalidValue']);
                    $invalidFieldErrorFound = true;
                    break;
                }
            }
            $this->assertTrue($invalidFieldErrorFound, "Expected 'InvalidField' error not found in the response.");
        }
    }

    public function testProductCreationWithGetterSetter()
    {
        $builder = $this->getApiBuilder();
        $referenceableProduct = ProductFixture::referenceableProduct($builder);
        $productType = ProductTypeFixture::fetchProductTypeByName($builder, self::PRODUCT_TYPE_NAME);

        if (!$productType) {
            $productType = ProductTypeFixture::createProductType($builder, self::PRODUCT_TYPE_NAME);
        }

        $datetime = new \DateTime('2015-02-02');
        $datetime = $datetime->format(\DateTime::ATOM);
        $green = AttributeLocalizedEnumValueBuilder::of()
            ->withKey("green")
            ->withLabel(LocalizedStringBuilder::of()->put("en", "green ")->put("de", "grün")->build())
            ->build();
        $cold = AttributeLocalizedEnumValueBuilder::of()
            ->withKey("cold")
            ->withLabel(LocalizedStringBuilder::of()->put("en", "Wash at or below 30°C ")->put("de", "30°C")->build())
            ->build();
        $tumbleDrying = AttributeLocalizedEnumValueBuilder::of()
            ->withKey("tumbleDrying")
            ->withLabel(LocalizedStringBuilder::of()->put("en", "tumble drying")->put("de", "Trommeltrocknen")->build())
            ->build();
        $productReference = ProductReferenceBuilder::of()->withId($referenceableProduct->getId())->build();

        $attributes = AttributeCollection::of()
            ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
            ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
            ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build())
            ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCentAmount(300)->withCurrencyCode("EUR")->build())->build())
            ->add(AttributeBuilder::of()->withName(self::AVAILABLE_SINCE_ATTR_NAME)->withValue($datetime)->build())
            ->add(AttributeBuilder::of()->withName(self::MATCHING_PRODUCTS_ATTR_NAME)->withValue([$productReference])->build());
        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes($attributes)
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withKey(ProductFixture::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', 'basic shirt')->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();
        $product = $builder->products()
            ->post($productDraft)
            ->execute();

        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();
        foreach ($masterVariant->getAttributes() as $attribute) {
            if ($attribute->getName() === self::COLOR_ATTR_NAME) {
                assertEquals($attribute->getValue()->key, "green");
            }
            if ($attribute->getName() === self::SIZE_ATTR_NAME) {
                assertEquals($attribute->getValue()->key, "S");
            }
        }
    }

    public function testReadAttributeWithoutProductType()
    {
        $builder = $this->getApiBuilder();
        $productTypeDraft = $this->createTShirtProductTypeDraft();
        $productType = $builder
            ->productTypes()
            ->post($productTypeDraft)
            ->execute();

        $this->assertNotNull($productType, "Product type creation failed");

        $attributes = AttributeCollection::of()
            ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
            ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
            ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build());

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes($attributes)
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withName(LocalizedStringBuilder::of()->put("en", "basic shirt")->build())
            ->withSlug(LocalizedStringBuilder::of()->put("en", ProductTypeFixture::uniqueProductTypeString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();

        try {
            $product = $builder->products()->post($productDraft)->execute();
        } catch (BadRequestException $e) {
            error_log($e->getMessage());
            $response = json_decode((string) $e->getResponse()->getBody(), true);
            error_log(print_r($response, true));

            throw $e;
        }

        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();
        foreach ($masterVariant->getAttributes() as $attribute) {
            /** @var AttributeAccessor $attrAccessor */
            $attrAccessor = $attribute->with(AttributeAccessor::of());
            if ($attribute->getName() === self::SIZE_ATTR_NAME) {
                $this->assertSame("S", $attrAccessor->getValueAsEnum()->getKey());
            }
        }
    }

    public function testReadAttributeGetValueAndConvertToBoolean()
    {
        $builder = $this->getApiBuilder();
        $productTypeDraft = $this->createTShirtProductTypeDraft();
        $productType = $builder
            ->productTypes()
            ->post($productTypeDraft)
            ->execute();

        $this->assertNotNull($productType, "Product type creation failed");

        $attributes = AttributeCollection::of()
            ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
            ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
            ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build());

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes($attributes)
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withName(LocalizedStringBuilder::of()->put("en", "basic shirt")->build())
            ->withSlug(LocalizedStringBuilder::of()->put("en", ProductTypeFixture::uniqueProductTypeString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();

        $product = $builder->products()->post($productDraft)->execute();
        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();

        $result = null;
        foreach ($masterVariant->getAttributes() as $attribute) {
            if ($attribute->getName() === self::SIZE_ATTR_NAME) {
                /** @var AttributeAccessor $attrAccessor */
                $attrAccessor = $attribute->with(AttributeAccessor::of());

                $result = $attrAccessor->getValueAsBool();
            }
        }

        $this->assertIsBool($result);
    }

    public function testReadAttributeGetValue()
    {
        $builder = $this->getApiBuilder();
        $product = $this->createProduct($builder);
        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();

        $attributeValue = 'not found';
        foreach ($masterVariant->getAttributes() as $attribute) {
            if ($attribute->getName() === self::SIZE_ATTR_NAME) {
                /** @var AttributeAccessor $attrAccessor */
                $attrAccessor = $attribute->with(AttributeAccessor::of());

                $result = $attrAccessor->getValueAsEnum();
                if ($result !== null) {
                    $attributeValue = $result->getLabel();
                }
            }
        }

        assertEquals($attributeValue, "S");
    }

    public function testUpdateAttributesBooks()
    {
        $builder = $this->getApiBuilder();
        $product = $this->createBookProduct($builder);
        $masterVariantId = 1;
        $productUpdate = ProductUpdateBuilder::of()
            ->withVersion($product->getVersion())
            ->withActions(
                ProductUpdateActionCollection::fromArray([
                    ProductSetAttributeActionBuilder::of()
                        ->withVariantId($masterVariantId)
                        ->withName(self::ISBN_ATTR_NAME)
                        ->withValue("978-3-86680-192-8")
                        ->build()
                ])
            )->build();

        $productUpdated = $builder
            ->products()
            ->withId($product->getId())
            ->post($productUpdate)
            ->execute();
        $masterVariant = $productUpdated->getMasterData()->getStaged()->getMasterVariant();
        $attribute = ProductTypeFixture::findAttribute($masterVariant->getAttributes(), self::ISBN_ATTR_NAME);

        assertEquals($attribute->getValue(), "978-3-86680-192-8");
    }


    public function testUpdateAttributesTShirt()
    {
        $builder = $this->getApiBuilder();
        $productTypeDraft = $this->createTShirtProductTypeDraft();
        $productType = $builder
            ->with()
            ->productTypes()
            ->post($productTypeDraft)
            ->execute();

        $attributes = AttributeCollection::of()
                ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
                ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
                ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build())
                ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCurrencyCode("EUR")->withCentAmount(300)->build())->build());

        $masterVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes($attributes)
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withKey(ProductFixture::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', 'basic shirt')->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withMasterVariant($masterVariantDraft)
            ->build();
        $product = $builder->products()
            ->post($productDraft)
            ->execute();

        $masterVariantId = 1;
        $productUpdatedAction = ProductUpdateBuilder::of()
            ->withVersion($product->getVersion())
            ->withActions(
                ProductUpdateActionCollection::fromArray([
                    ProductSetAttributeActionBuilder::of()
                        ->withVariantId($masterVariantId)
                        ->withName(self::COLOR_ATTR_NAME)
                        ->withValue("red")
                        ->build(),
                    ProductSetAttributeActionBuilder::of()
                        ->withVariantId($masterVariantId)
                        ->withName(self::SIZE_ATTR_NAME)
                        ->withValue("M")
                        ->build(),
                    ProductSetAttributeActionBuilder::of()
                        ->withVariantId($masterVariantId)
                        ->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)
                        ->withValue(["cold"])
                        ->build(),
                    ProductSetAttributeActionBuilder::of()
                        ->withVariantId($masterVariantId)
                        ->withName(self::RRP_ATTR_NAME)
                        ->withValue(MoneyBuilder::of()->withCurrencyCode("EUR")->withCentAmount(2000)->build())
                        ->build(),
                ])
            )->build();
        $productUpdated = $builder
            ->with()
            ->products()
            ->withId($product->getId())
            ->post($productUpdatedAction)
            ->execute();

        $attributesUpdatedProduct = $productUpdated->getMasterData()->getStaged()->getMasterVariant()->getAttributes();

        self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::SIZE_ATTR_NAME)->getValue()->key, "M");
        self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::COLOR_ATTR_NAME)->getValue()->key, "red");
        self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::LAUNDRY_SYMBOLS_ATTR_NAME)->getValue()[0]->key, "cold");
        self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::RRP_ATTR_NAME)->getValue()->centAmount, 2000);
    }

    public function testOrderImportExample()
    {
        $builder = $this->getApiBuilder();
        $product = $this->createProduct($builder);
        $attributes = AttributeCollection::of()
            ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("yellow")->build())
            ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCurrencyCode("EUR")->withCentAmount(30)->build())->build());

        $productVariantImportDraft = ProductVariantImportDraftBuilder::of()
                                        ->withId(1)
                                        ->withAttributes($attributes)
                                        ->build();
        $lineItemImportDraft = LineItemImportDraftBuilder::of()
            ->withProductId($product->getId())
            ->withVariant($productVariantImportDraft)
            ->withQuantity(1)
            ->withPrice(ProductFixture::priceDraft())
            ->withName(LocalizedStringBuilder::of()->put("en", "product name")->build())
            ->build();
        $orderImportDraft = OrderImportDraftBuilder::of()
            ->withLineItems(LineItemImportDraftCollection::of()->add($lineItemImportDraft))
            ->withTotalPrice(MoneyBuilder::of()->withCentAmount(20)->withCurrencyCode("EUR")->build())
            ->withOrderState(OrderState::COMPLETE)
            ->build();
        $order = $builder->orders()
            ->importOrder()
            ->post($orderImportDraft)
            ->execute();
        $productVariant = $order->getLineItems()->current()->getVariant();
        $colorAttribute = ProductTypeFixture::findAttribute($productVariant->getAttributes(), self::COLOR_ATTR_NAME);
        assertEquals("yellow", $colorAttribute->getValue());
        $rrpAttribute = ProductTypeFixture::findAttribute($productVariant->getAttributes(), self::RRP_ATTR_NAME);
        assertEquals(30, $rrpAttribute->getValue()->centAmount);
    }
}
