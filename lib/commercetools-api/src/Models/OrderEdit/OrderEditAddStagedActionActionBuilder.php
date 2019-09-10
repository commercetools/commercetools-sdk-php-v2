<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditAddStagedActionAction>
 */
final class OrderEditAddStagedActionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var StagedOrderUpdateAction|?StagedOrderUpdateActionBuilder
     */
    private $stagedAction;

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
     * @return null|StagedOrderUpdateAction
     */
    public function getStagedAction()
    {
        return $this->stagedAction instanceof StagedOrderUpdateActionBuilder ? $this->stagedAction->build() : $this->stagedAction;
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
    public function withStagedAction(?StagedOrderUpdateAction $stagedAction)
    {
        $this->stagedAction = $stagedAction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStagedActionBuilder(?StagedOrderUpdateActionBuilder $stagedAction)
    {
        $this->stagedAction = $stagedAction;

        return $this;
    }

    public function build(): OrderEditAddStagedActionAction
    {
        return new OrderEditAddStagedActionActionModel(
            $this->action,
            ($this->stagedAction instanceof StagedOrderUpdateActionBuilder ? $this->stagedAction->build() : $this->stagedAction)
        );
    }

    public static function of(): OrderEditAddStagedActionActionBuilder
    {
        return new self();
    }
}
