<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetShippingMethodTaxRateAction>
 */
final class StagedOrderSetShippingMethodTaxRateActionBuilder implements Builder
{
    /**
     * @var ExternalTaxRateDraft|?ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    public function build(): StagedOrderSetShippingMethodTaxRateAction
    {
        return new StagedOrderSetShippingMethodTaxRateActionModel(
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate)
        );
    }

    public static function of(): StagedOrderSetShippingMethodTaxRateActionBuilder
    {
        return new self();
    }
}
