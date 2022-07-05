<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditSetStagedActionsAction extends OrderEditUpdateAction
{
    public const FIELD_STAGED_ACTIONS = 'stagedActions';

    /**
     * <p>The actions to edit the <code>resource</code>.</p>
     *

     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    /**
     * @param ?StagedOrderUpdateActionCollection $stagedActions
     */
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;
}
