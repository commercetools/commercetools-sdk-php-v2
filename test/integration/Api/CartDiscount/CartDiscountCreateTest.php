<?php


namespace Commercetools\IntegrationTest\Api\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountDraftBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueGiftLineItemDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Product\ProductResourceIdentifierBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Import\Models\Importsinks\ImportSinkDraftBuilder;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\Api\ProductType\ProductTypeFixture;
use Commercetools\IntegrationTest\Api\TaxCategory\TaxCategoryFixture;
use Commercetools\IntegrationTest\ApiTestCase;

class CartDiscountCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        CartDiscountFixture::withCartDiscount(
            $builder,
            function (CartDiscount $cartDiscount) use ($builder) {
                $request = $builder
                    ->with()
                    ->cartDiscounts()
                    ->withId($cartDiscount->getId())
                    ->get();
                $cartDiscountQueryResponse = $request->execute();

                $this->assertSame($cartDiscount->getName()->current(), $cartDiscountQueryResponse->getName()->current());
                $this->assertNotEmpty($cartDiscountQueryResponse->getId());
                $this->assertSame(1, $cartDiscountQueryResponse->getVersion());
            }
        );
    }

    public function testCreateGiftLineItem()
    {
        $builder = $this->getApiBuilder();
        ProductFixture::withProduct(
            $builder,
            function (Product $product) use ($builder) {
                CartDiscountFixture::withDraftCartDiscount(
                    $builder,
                    function (CartDiscountDraftBuilder $draftBuilder) use ($product) {
                        $draftBuilder = CartDiscountDraftBuilder::of();
                        $uniqueCategoryString = CartDiscountFixture::uniqueCategoryString();
                        $draftBuilder->withName(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString)->build())
                            ->withKey($uniqueCategoryString)
                            ->withCartPredicate("true")
                            ->withRequiresDiscountCode(false)
                            ->withSortOrder('0.9' . trim((string)mt_rand(1, CartDiscountFixture::RAND_MAX), '0'))
                            ->withValue(
                                CartDiscountValueGiftLineItemDraftBuilder::of()
                                    ->withProduct(
                                        ProductResourceIdentifierBuilder::of()
                                            ->withId($product->getId())
                                            ->build()
                                    )
                                    ->withVariantId(1)
                                    ->build()
                            );

                        return $draftBuilder->build();
                    },
                    function (CartDiscount $cartDiscount) use ($builder) {
                        $request = $builder
                            ->with()
                            ->cartDiscounts()
                            ->withId($cartDiscount->getId())
                            ->get();
                        $cartDiscountQueryResponse = $request->execute();

                        $this->assertSame($cartDiscount->getName()->current(), $cartDiscountQueryResponse->getName()->current());
                        $this->assertNotEmpty($cartDiscountQueryResponse->getId());
                        $this->assertSame(1, $cartDiscountQueryResponse->getVersion());
                    }
                );
            }
        );
    }
}
