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
 * @implements Builder<StagedOrderSetLineItemTaxRateAction>
 */
final class StagedOrderSetLineItemTaxRateActionBuilder implements Builder
{
    /**
     * @var ExternalTaxRateDraft|?ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
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
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

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

    public function build(): StagedOrderSetLineItemTaxRateAction
    {
        return new StagedOrderSetLineItemTaxRateActionModel(
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate),
            $this->lineItemId
        );
    }

    public static function of(): StagedOrderSetLineItemTaxRateActionBuilder
    {
        return new self();
    }
}
