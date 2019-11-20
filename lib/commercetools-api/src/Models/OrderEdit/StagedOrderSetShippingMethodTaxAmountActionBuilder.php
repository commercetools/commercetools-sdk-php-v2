<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Cart\ExternalTaxAmountDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetShippingMethodTaxAmountAction>
 */
final class StagedOrderSetShippingMethodTaxAmountActionBuilder implements Builder
{
    /**
     * @var ExternalTaxAmountDraft|?ExternalTaxAmountDraftBuilder
     */
    private $externalTaxAmount;

    /**
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        return $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount;
    }

    /**
     * @return $this
     */
    public function withExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxAmountBuilder(?ExternalTaxAmountDraftBuilder $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    public function build(): StagedOrderSetShippingMethodTaxAmountAction
    {
        return new StagedOrderSetShippingMethodTaxAmountActionModel(
            ($this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount)
        );
    }

    public static function of(): StagedOrderSetShippingMethodTaxAmountActionBuilder
    {
        return new self();
    }
}
