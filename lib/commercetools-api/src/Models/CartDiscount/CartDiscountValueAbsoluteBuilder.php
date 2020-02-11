<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\TypedMoneyCollection;

/**
 * @implements Builder<CartDiscountValueAbsolute>
 */
final class CartDiscountValueAbsoluteBuilder implements Builder
{
    /**
     * @var ?TypedMoneyCollection
     */
    private $money;

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @return $this
     */
    public function withMoney(?TypedMoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }


    public function build(): CartDiscountValueAbsolute
    {
        return new CartDiscountValueAbsoluteModel(
            $this->money
        );
    }

    public static function of(): CartDiscountValueAbsoluteBuilder
    {
        return new self();
    }
}
