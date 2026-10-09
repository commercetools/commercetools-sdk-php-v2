<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\HighPrecisionMoneyDraft;
use Commercetools\Api\Models\Common\HighPrecisionMoneyDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AbsoluteAllocationDraft>
 */
final class AbsoluteAllocationDraftBuilder implements Builder
{
    /**

     * @var null|HighPrecisionMoneyDraft|HighPrecisionMoneyDraftBuilder
     */
    private $amount;

    /**
     * <p>Amount of the Order total allocated to the Payment Method.</p>
     *

     * @return null|HighPrecisionMoneyDraft
     */
    public function getAmount()
    {
        return $this->amount instanceof HighPrecisionMoneyDraftBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @param ?HighPrecisionMoneyDraft $amount
     * @return $this
     */
    public function withAmount(?HighPrecisionMoneyDraft $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?HighPrecisionMoneyDraftBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): AbsoluteAllocationDraft
    {
        return new AbsoluteAllocationDraftModel(
            $this->amount instanceof HighPrecisionMoneyDraftBuilder ? $this->amount->build() : $this->amount
        );
    }

    public static function of(): AbsoluteAllocationDraftBuilder
    {
        return new self();
    }
}
