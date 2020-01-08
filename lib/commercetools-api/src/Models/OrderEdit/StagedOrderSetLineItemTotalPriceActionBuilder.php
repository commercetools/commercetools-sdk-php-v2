<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetLineItemTotalPriceAction>
 */
final class StagedOrderSetLineItemTotalPriceActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ExternalLineItemTotalPrice|?ExternalLineItemTotalPriceBuilder
     */
    private $externalTotalPrice;

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        return $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice;
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
    public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    public function build(): StagedOrderSetLineItemTotalPriceAction
    {
        return new StagedOrderSetLineItemTotalPriceActionModel(
            $this->lineItemId,
            ($this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice)
        );
    }

    public static function of(): StagedOrderSetLineItemTotalPriceActionBuilder
    {
        return new self();
    }
}
