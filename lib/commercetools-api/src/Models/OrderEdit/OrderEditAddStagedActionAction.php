<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface OrderEditAddStagedActionAction extends OrderEditUpdateAction
{

    public const FIELD_STAGED_ACTION = 'stagedAction';

    /**
     * @return null|StagedOrderUpdateAction
     */
    public function getStagedAction();

    public function setStagedAction(?StagedOrderUpdateAction $stagedAction): void;
}
