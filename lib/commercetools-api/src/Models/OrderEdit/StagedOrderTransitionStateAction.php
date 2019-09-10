<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\State\StateResourceIdentifier;

interface StagedOrderTransitionStateAction extends StagedOrderUpdateAction
{
    
    const FIELD_STATE = 'state';
    const FIELD_FORCE = 'force';

    /**
     *
     * @return StateResourceIdentifier|null
     */
    public function getState();
    
    /**
     *
     * @return bool|null
     */
    public function getForce();
    public function setState(?StateResourceIdentifier $state): void;
    
    public function setForce(?bool $force): void;
}