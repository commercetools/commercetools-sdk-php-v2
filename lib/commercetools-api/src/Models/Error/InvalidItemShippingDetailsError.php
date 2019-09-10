<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface InvalidItemShippingDetailsError extends ErrorObject
{
    
    const FIELD_SUBJECT = 'subject';
    const FIELD_ITEM_ID = 'itemId';

    /**
     *
     * @return string|null
     */
    public function getSubject();
    
    /**
     *
     * @return string|null
     */
    public function getItemId();
    public function setSubject(?string $subject): void;
    
    public function setItemId(?string $itemId): void;
}