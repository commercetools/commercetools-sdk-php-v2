<?php

declare(strict_types=1);

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\CartDiscount\CartDiscountDraftBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueGiftLineItemDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use PHPUnit\Framework\TestCase;

class CartDiscountTest extends TestCase
{
    public function testVariantId()
    {
        $cartDiscountDraft = CartDiscountDraftBuilder::of()
            ->withNameBuilder(LocalizedStringBuilder::of()->put('en', 'discount'))
            ->withKey('cart-discount')
            ->withCartPredicate("true")
            ->withRequiresDiscountCode(false)
            ->withSortOrder('0.903')
            ->withValue(
                CartDiscountValueGiftLineItemDraftBuilder::of()
                    ->withProductBuilder(ProductReferenceBuilder::of()->withId("7be81688-0863-4f73-8ec6-1b249febc294"))
                    ->withVariantId(1)
                    ->build()
            )
        ;
        $this->assertJsonStringEqualsJsonString(
            '{
                "cartPredicate": "true",
                "key": "cart-discount",
                "name": {
                    "en": "discount"
                },
                "requiresDiscountCode": false,
                "sortOrder": "0.903",
                "value": {
                    "product": {
                        "id": "7be81688-0863-4f73-8ec6-1b249febc294",
                        "typeId": "product"
                    },
                    "type": "giftLineItem",
                    "variantId": 1
                }
            }',
            json_encode($cartDiscountDraft->build())
        );
    }
}
