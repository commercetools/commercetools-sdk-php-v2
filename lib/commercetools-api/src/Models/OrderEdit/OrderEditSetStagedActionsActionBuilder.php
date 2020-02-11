<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;

/**
 * @implements Builder<OrderEditSetStagedActionsAction>
 */
final class OrderEditSetStagedActionsActionBuilder implements Builder
{
    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    private $stagedActions;

    /**
     * <p>The actions to edit the <code>resource</code>.</p>
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        return $this->stagedActions;
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
            $this->stagedActions
        );
    }

    public static function of(): OrderEditSetStagedActionsActionBuilder
    {
        return new self();
    }
}
