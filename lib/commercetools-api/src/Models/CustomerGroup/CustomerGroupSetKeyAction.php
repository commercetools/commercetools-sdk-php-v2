<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\JsonObject;

interface CustomerGroupSetKeyAction extends CustomerGroupUpdateAction
{
    
    const FIELD_KEY = 'key';

    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setKey(?string $key): void;
}