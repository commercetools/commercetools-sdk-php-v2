<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditSetStagedActionsAction>
 */
final class OrderEditSetStagedActionsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    private $stagedActions;

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
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        return $this->stagedActions;
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
    public function withStagedActions(?StagedOrderUpdateActionCollection $stagedActions)
    {
        $this->stagedActions = $stagedActions;

        return $this;
    }

    public function build(): OrderEditSetStagedActionsAction
    {
        return new OrderEditSetStagedActionsActionModel(
            $this->action,
            $this->stagedActions
        );
    }

    public static function of(): OrderEditSetStagedActionsActionBuilder
    {
        return new self();
    }
}
