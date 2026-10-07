<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\HighPrecisionMoney;
use Commercetools\Api\Models\Common\HighPrecisionMoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AbsoluteAllocation>
 */
final class AbsoluteAllocationBuilder implements Builder
{
    /**

     * @var null|HighPrecisionMoney|HighPrecisionMoneyBuilder
     */
    private $amount;

    /**
     * <p>Amount of the Order total allocated to the Payment Method.</p>
     *

     * @return null|HighPrecisionMoney
     */
    public function getAmount()
    {
        return $this->amount instanceof HighPrecisionMoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @param ?HighPrecisionMoney $amount
     * @return $this
     */
    public function withAmount(?HighPrecisionMoney $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?HighPrecisionMoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): AbsoluteAllocation
    {
        return new AbsoluteAllocationModel(
            $this->amount instanceof HighPrecisionMoneyBuilder ? $this->amount->build() : $this->amount
        );
    }

    public static function of(): AbsoluteAllocationBuilder
    {
        return new self();
    }
}
