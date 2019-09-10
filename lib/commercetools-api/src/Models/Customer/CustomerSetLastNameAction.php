<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetLastNameAction extends CustomerUpdateAction
{
    
    const FIELD_LAST_NAME = 'lastName';

    /**
     *
     * @return string|null
     */
    public function getLastName();
    public function setLastName(?string $lastName): void;
}