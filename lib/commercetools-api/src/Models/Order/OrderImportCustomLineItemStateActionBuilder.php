<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderImportCustomLineItemStateAction>
 */
final class OrderImportCustomLineItemStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
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
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): OrderImportCustomLineItemStateAction
    {
        return new OrderImportCustomLineItemStateActionModel(
            $this->customLineItemId,
            $this->state
        );
    }

    public static function of(): OrderImportCustomLineItemStateActionBuilder
    {
        return new self();
    }
}
