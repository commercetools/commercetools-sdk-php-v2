<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetCustomLineItemShippingDetailsAction>
 */
final class StagedOrderSetCustomLineItemShippingDetailsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ItemShippingDetailsDraft|?ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetails(?ItemShippingDetailsDraft $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetailsBuilder(?ItemShippingDetailsDraftBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): StagedOrderSetCustomLineItemShippingDetailsAction
    {
        return new StagedOrderSetCustomLineItemShippingDetailsActionModel(
            $this->customLineItemId,
            ($this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails)
        );
    }

    public static function of(): StagedOrderSetCustomLineItemShippingDetailsActionBuilder
    {
        return new self();
    }
}
