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
 * @implements Builder<StagedOrderSetLineItemTaxAmountAction>
 */
final class StagedOrderSetLineItemTaxAmountActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var null|ExternalTaxAmountDraft|ExternalTaxAmountDraftBuilder
     */
    private $externalTaxAmount;

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

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
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
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

    public function build(): StagedOrderSetLineItemTaxAmountAction
    {
        return new StagedOrderSetLineItemTaxAmountActionModel(
            $this->lineItemId,
            $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount
        );
    }

    public static function of(): StagedOrderSetLineItemTaxAmountActionBuilder
    {
        return new self();
    }
}
