<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetFirstNameAction extends CustomerUpdateAction
{
    
    const FIELD_FIRST_NAME = 'firstName';

    /**
     *
     * @return string|null
     */
    public function getFirstName();
    public function setFirstName(?string $firstName): void;
}