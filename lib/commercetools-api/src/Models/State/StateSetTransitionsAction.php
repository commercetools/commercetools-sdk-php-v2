<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;

interface StateSetTransitionsAction extends StateUpdateAction
{
    
    const FIELD_TRANSITIONS = 'transitions';

    /**
     *
     * @return StateResourceIdentifierCollection|null
     */
    public function getTransitions();
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}