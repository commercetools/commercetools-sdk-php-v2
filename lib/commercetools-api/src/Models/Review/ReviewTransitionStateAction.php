<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\State\StateResourceIdentifier;

interface ReviewTransitionStateAction extends ReviewUpdateAction
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