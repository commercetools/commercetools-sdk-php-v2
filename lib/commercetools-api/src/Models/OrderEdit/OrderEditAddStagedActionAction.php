<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface OrderEditAddStagedActionAction extends OrderEditUpdateAction
{
    
    const FIELD_STAGED_ACTION = 'stagedAction';

    /**
     *
     * @return StagedOrderUpdateAction|null
     */
    public function getStagedAction();
    public function setStagedAction(?StagedOrderUpdateAction $stagedAction): void;
}