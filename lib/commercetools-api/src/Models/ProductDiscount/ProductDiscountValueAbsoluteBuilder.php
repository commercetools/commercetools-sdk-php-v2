<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
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
     * @param ?TypedMoneyCollection $money
     * @return $this
     */
    public function withMoney(?TypedMoneyCollection $money)
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
