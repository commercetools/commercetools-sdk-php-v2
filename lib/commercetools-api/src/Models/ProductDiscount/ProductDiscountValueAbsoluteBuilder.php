<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountValueAbsolute>
 */
final class ProductDiscountValueAbsoluteBuilder implements Builder
{
    /**
     * @var ?CentPrecisionMoneyCollection
     */
    private $money;

    /**
     * <p>Money values in different currencies. An absolute <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> will only match a price if this array contains a value with the same currency. For example, if it contains 10€ and 15$, the matching € price will be decreased by 10€ and the matching $ price will be decreased by 15$.</p>
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


    public function build(): ProductDiscountValueAbsolute
    {
        return new ProductDiscountValueAbsoluteModel(
            $this->money
        );
    }

    public static function of(): ProductDiscountValueAbsoluteBuilder
    {
        return new self();
    }
}
