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
 * @implements Builder<CartDiscountValueAbsolute>
 */
final class CartDiscountValueAbsoluteBuilder implements Builder
{
    /**

     * @var ?CentPrecisionMoneyCollection
     */
    private $money;

    /**

     * @var ?string
     */
    private $applicationMode;

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
     * <p>Determines how the discount is applied on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> and <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     *

     * @return null|string
     */
    public function getApplicationMode()
    {
        return $this->applicationMode;
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

    /**
     * @param ?string $applicationMode
     * @return $this
     */
    public function withApplicationMode(?string $applicationMode)
    {
        $this->applicationMode = $applicationMode;

        return $this;
    }


    public function build(): CartDiscountValueAbsolute
    {
        return new CartDiscountValueAbsoluteModel(
            $this->money,
            $this->applicationMode
        );
    }

    public static function of(): CartDiscountValueAbsoluteBuilder
    {
        return new self();
    }
}
