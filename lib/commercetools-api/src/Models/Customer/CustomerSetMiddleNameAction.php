<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetMiddleNameAction extends CustomerUpdateAction
{
    
    const FIELD_MIDDLE_NAME = 'middleName';

    /**
     *
     * @return string|null
     */
    public function getMiddleName();
    public function setMiddleName(?string $middleName): void;
}