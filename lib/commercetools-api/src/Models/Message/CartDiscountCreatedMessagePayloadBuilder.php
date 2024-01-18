<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountCreatedMessagePayload>
 */
final class CartDiscountCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CartDiscount|CartDiscountBuilder
     */
    private $cartDiscount;

    /**
     * <p>The <a href="ctp:api:type:CartDiscount">Cart Discount</a> that was created.</p>
     *

     * @return null|CartDiscount
     */
    public function getCartDiscount()
    {
        return $this->cartDiscount instanceof CartDiscountBuilder ? $this->cartDiscount->build() : $this->cartDiscount;
    }

    /**
     * @param ?CartDiscount $cartDiscount
     * @return $this
     */
    public function withCartDiscount(?CartDiscount $cartDiscount)
    {
        $this->cartDiscount = $cartDiscount;

        return $this;
    }

    /**
     * @deprecated use withCartDiscount() instead
     * @return $this
     */
    public function withCartDiscountBuilder(?CartDiscountBuilder $cartDiscount)
    {
        $this->cartDiscount = $cartDiscount;

        return $this;
    }

    public function build(): CartDiscountCreatedMessagePayload
    {
        return new CartDiscountCreatedMessagePayloadModel(
            $this->cartDiscount instanceof CartDiscountBuilder ? $this->cartDiscount->build() : $this->cartDiscount
        );
    }

    public static function of(): CartDiscountCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
