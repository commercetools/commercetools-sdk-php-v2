<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderUpdate>
 */
final class OrderUpdateBuilder implements Builder
{
    /**
     * @var ?OrderUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|OrderUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?OrderUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): OrderUpdate
    {
        return new OrderUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): OrderUpdateBuilder
    {
        return new self();
    }
}
