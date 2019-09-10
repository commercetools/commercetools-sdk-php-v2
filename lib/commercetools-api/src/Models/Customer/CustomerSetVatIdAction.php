<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetVatIdAction extends CustomerUpdateAction
{
    
    const FIELD_VAT_ID = 'vatId';

    /**
     *
     * @return string|null
     */
    public function getVatId();
    public function setVatId(?string $vatId): void;
}