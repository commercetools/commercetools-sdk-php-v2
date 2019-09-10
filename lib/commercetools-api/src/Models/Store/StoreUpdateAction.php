<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Store;

use Commercetools\Base\JsonObject;

interface StoreUpdateAction extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'action';
    const FIELD_ACTION = 'action';

    /**
     *
     * @return string|null
     */
    public function getAction();
    public function setAction(?string $action): void;
}