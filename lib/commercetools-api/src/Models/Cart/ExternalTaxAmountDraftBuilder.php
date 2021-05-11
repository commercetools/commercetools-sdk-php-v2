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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExternalTaxAmountDraft>
 */
final class ExternalTaxAmountDraftBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $totalGross;

    /**
     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * <p>The total gross amount of the item (totalNet + taxes).</p>
     *
     * @return null|Money
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @param ?Money $totalGross
     * @return $this
     */
    public function withTotalGross(?Money $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @param ?ExternalTaxRateDraft $taxRate
     * @return $this
     */
    public function withTaxRate(?ExternalTaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withTotalGross() instead
     * @return $this
     */
    public function withTotalGrossBuilder(?MoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
     * @return $this
     */
    public function withTaxRateBuilder(?ExternalTaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function build(): ExternalTaxAmountDraft
    {
        return new ExternalTaxAmountDraftModel(
            $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross,
            $this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate
        );
    }

    public static function of(): ExternalTaxAmountDraftBuilder
    {
        return new self();
    }
}
