<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ShippingRateInputDraft;
use Commercetools\Api\Models\Cart\ShippingRateInputDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetShippingRateInputAction>
 */
final class StagedOrderSetShippingRateInputActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ShippingRateInputDraft|?ShippingRateInputDraftBuilder
     */
    private $shippingRateInput;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputDraftBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    public function build(): StagedOrderSetShippingRateInputAction
    {
        return new StagedOrderSetShippingRateInputActionModel(
            $this->action,
            ($this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput)
        );
    }

    public static function of(): StagedOrderSetShippingRateInputActionBuilder
    {
        return new self();
    }
}
