<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditAddStagedActionAction extends OrderEditUpdateAction
{
    public const FIELD_STAGED_ACTION = 'stagedAction';

    /**

     * @return null|StagedOrderUpdateAction
     */
    public function getStagedAction();

    /**
     * @param ?StagedOrderUpdateAction $stagedAction
     */
    public function setStagedAction(?StagedOrderUpdateAction $stagedAction): void;
}
