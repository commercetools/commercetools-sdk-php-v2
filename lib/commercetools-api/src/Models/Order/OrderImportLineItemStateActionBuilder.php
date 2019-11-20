<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderImportLineItemStateAction>
 */
final class OrderImportLineItemStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
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
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

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

    public function build(): OrderImportLineItemStateAction
    {
        return new OrderImportLineItemStateActionModel(
            $this->lineItemId,
            $this->state
        );
    }

    public static function of(): OrderImportLineItemStateActionBuilder
    {
        return new self();
    }
}
