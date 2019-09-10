<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface UserProvidedIdentifiers extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_CUSTOMER_NUMBER = 'customerNumber';
    const FIELD_SKU = 'sku';
    const FIELD_SLUG = 'slug';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return string|null
     */
    public function getExternalId();
    
    /**
     *
     * @return string|null
     */
    public function getOrderNumber();
    
    /**
     *
     * @return string|null
     */
    public function getCustomerNumber();
    
    /**
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getSlug();
    public function setKey(?string $key): void;
    
    public function setExternalId(?string $externalId): void;
    
    public function setOrderNumber(?string $orderNumber): void;
    
    public function setCustomerNumber(?string $customerNumber): void;
    
    public function setSku(?string $sku): void;
    
    public function setSlug(?LocalizedString $slug): void;
}