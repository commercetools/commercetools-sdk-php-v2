<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetExternalIdAction extends CustomerUpdateAction
{
    
    const FIELD_EXTERNAL_ID = 'externalId';

    /**
     *
     * @return string|null
     */
    public function getExternalId();
    public function setExternalId(?string $externalId): void;
}