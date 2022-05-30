<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountValueFixed>
 */
final class CartDiscountValueFixedBuilder implements Builder
{
    /**
     * @var ?CentPrecisionMoneyCollection
     */
    private $money;

    /**
     * <p>Cent precision money values in different currencies.</p>
     *
     * @return null|CentPrecisionMoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param ?CentPrecisionMoneyCollection $money
     * @return $this
     */
    public function withMoney(?CentPrecisionMoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }


    public function build(): CartDiscountValueFixed
    {
        return new CartDiscountValueFixedModel(
            $this->money
        );
    }

    public static function of(): CartDiscountValueFixedBuilder
    {
        return new self();
    }
}
