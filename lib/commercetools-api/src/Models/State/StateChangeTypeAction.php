<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;

interface StateChangeTypeAction extends StateUpdateAction
{
    
    const FIELD_TYPE = 'type';

    /**
     *
     * @return string|null
     */
    public function getType();
    public function setType(?string $type): void;
}