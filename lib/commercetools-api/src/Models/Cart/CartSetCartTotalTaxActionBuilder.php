<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CartSetCartTotalTaxAction>
 */
final class CartSetCartTotalTaxActionBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $externalTotalGross;

    /**
     * @var ?TaxPortionDraftCollection
     */
    private $externalTaxPortions;

    /**
     * <p>The total gross amount of the cart (totalNet + taxes).</p>.
     *
     * @return null|Money
     */
    public function getExternalTotalGross()
    {
        return $this->externalTotalGross instanceof MoneyBuilder ? $this->externalTotalGross->build() : $this->externalTotalGross;
    }

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getExternalTaxPortions()
    {
        return $this->externalTaxPortions;
    }

    /**
     * @return $this
     */
    public function withExternalTotalGross(?Money $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions)
    {
        $this->externalTaxPortions = $externalTaxPortions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTotalGrossBuilder(?MoneyBuilder $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;

        return $this;
    }

    public function build(): CartSetCartTotalTaxAction
    {
        return new CartSetCartTotalTaxActionModel(
            ($this->externalTotalGross instanceof MoneyBuilder ? $this->externalTotalGross->build() : $this->externalTotalGross),
            $this->externalTaxPortions
        );
    }

    public static function of(): CartSetCartTotalTaxActionBuilder
    {
        return new self();
    }
}
