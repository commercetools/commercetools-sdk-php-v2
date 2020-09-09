<?php

declare(strict_types=1);

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\Cart\CartDraftBuilder;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCartDraft()
    {
        $cartDraft = CartDraftBuilder::of()
                ->withCurrency('EUR')
                ->withDiscountCodes([
                    'code-1',
                    'code-2'
                ]);
        $this->assertJsonStringEqualsJsonString(
            '{
                "currency": "EUR",
                "discountCodes": [
                    "code-1",
                    "code-2"
                ]
            }',
            json_encode($cartDraft->build())
        );
    }
}
