<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;

interface StateChangeInitialAction extends StateUpdateAction
{
    
    const FIELD_INITIAL = 'initial';

    /**
     *
     * @return bool|null
     */
    public function getInitial();
    public function setInitial(?bool $initial): void;
}