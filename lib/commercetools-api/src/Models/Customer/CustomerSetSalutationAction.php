<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetSalutationAction extends CustomerUpdateAction
{
    
    const FIELD_SALUTATION = 'salutation';

    /**
     *
     * @return string|null
     */
    public function getSalutation();
    public function setSalutation(?string $salutation): void;
}