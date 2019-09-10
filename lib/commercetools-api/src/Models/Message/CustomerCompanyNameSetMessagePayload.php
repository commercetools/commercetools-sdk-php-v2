<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface CustomerCompanyNameSetMessagePayload extends MessagePayload
{
    
    const FIELD_COMPANY_NAME = 'companyName';

    /**
     *
     * @return string|null
     */
    public function getCompanyName();
    public function setCompanyName(?string $companyName): void;
}