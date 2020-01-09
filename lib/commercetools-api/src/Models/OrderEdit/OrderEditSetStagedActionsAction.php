<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;

interface OrderEditSetStagedActionsAction extends OrderEditUpdateAction
{
    const FIELD_STAGED_ACTIONS = 'stagedActions';

    /**
     * <p>The actions to edit the <code>resource</code>.</p>
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;
}
