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
use Commercetools\Api\Models\Common\MoneyCollection;

/**
 * @implements Builder<CartDiscountValueAbsoluteDraft>
 */
final class CartDiscountValueAbsoluteDraftBuilder implements Builder
{
    /**
     * @var ?MoneyCollection
     */
    private $money;

    /**
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @return $this
     */
    public function withMoney(?MoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }


    public function build(): CartDiscountValueAbsoluteDraft
    {
        return new CartDiscountValueAbsoluteDraftModel(
            $this->money
        );
    }

    public static function of(): CartDiscountValueAbsoluteDraftBuilder
    {
        return new self();
    }
}
