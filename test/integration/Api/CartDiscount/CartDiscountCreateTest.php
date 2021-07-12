<?php


namespace Commercetools\IntegrationTest\Api\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountDraftBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueGiftLineItemDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Product\ProductResourceIdentifierBuilder;
use Commercetools\Exception\BadRequestException;
use Commercetools\Exception\NotFoundException;
use Commercetools\Import\Models\Importsinks\ImportSinkDraftBuilder;
use Commercetools\IntegrationTest\ApiTestCase;

class CartDiscountCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        CartDiscountFixture::withCartDiscount(
            $builder,
            function (CartDiscount $cartDiscount) use ($builder) {
                $request = $builder->with()->cartDiscounts()->withId($cartDiscount->getId())->get();
                $cartDiscountQueryResponse = $request->execute();

                $this->assertSame($cartDiscount->getName()->current(), $cartDiscountQueryResponse->getName()->current());
                $this->assertNotEmpty($cartDiscountQueryResponse->getId());
                $this->assertSame(1, $cartDiscountQueryResponse->getVersion());
            }
        );
    }

    public function testCreateGiftLineItem()
    {
        $this->markTestIncomplete("product fixture missing");
        $builder = $this->getApiBuilder();

        CartDiscountFixture::withDraftCartDiscount(
            $builder,
            function (CartDiscountDraftBuilder $draft) {
                $builder = CartDiscountDraftBuilder::of();
                $uniqueCategoryString = CartDiscountFixture::uniqueCategoryString();
                $builder->withNameBuilder(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString))
                    ->withKey($uniqueCategoryString)
                    ->withCartPredicate("true")
                    ->withRequiresDiscountCode(false)
                    ->withSortOrder('0.9' . trim((string)mt_rand(1, CartDiscountFixture::RAND_MAX), '0'))
                    ->withValue(
                        CartDiscountValueGiftLineItemDraftBuilder::of()
                            ->withProduct(ProductResourceIdentifierBuilder::of()->withId("7be81688-0863-4f73-8ec6-1b249febc294")->build())
                            ->withVariantId(1)
                            ->build()
                    )
                ;
                $draft = $builder->build();
                return $draft;
            },
            function (CartDiscount $cartDiscount) use ($builder) {
                $apiRequestBuilder = $builder;
                $builder = CartDiscountDraftBuilder::of();
                $uniqueCategoryString = CartDiscountFixture::uniqueCategoryString();
                $builder->withNameBuilder(LocalizedStringBuilder::of()->put('en', $uniqueCategoryString))
                    ->withKey($uniqueCategoryString)
                    ->withCartPredicate("true")
                    ->withRequiresDiscountCode(false)
                    ->withSortOrder('0.9' . trim((string)mt_rand(1, CartDiscountFixture::RAND_MAX), '0'))
                    ->withValue(
                        CartDiscountValueGiftLineItemDraftBuilder::of()
                            ->withProduct(ProductResourceIdentifierBuilder::of()->withId("7be81688-0863-4f73-8ec6-1b249febc294")->build())
                            ->withVariantId(1)
                            ->build()
                    )
                ;
                $draft = $builder->build();
                $apiRequestBuilder->withProjectKey('')->cartDiscounts()->post($draft);

                $request = $builder->with()->cartDiscounts()->withId($cartDiscount->getId())->get();
                $cartDiscountQueryResponse = $request->execute();

                $this->assertSame($cartDiscount->getName()->current(), $cartDiscountQueryResponse->getName()->current());
                $this->assertNotEmpty($cartDiscountQueryResponse->getId());
                $this->assertSame(1, $cartDiscountQueryResponse->getVersion());
            }
        );
    }
}
