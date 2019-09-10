<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;

interface TaxCategory extends LoggedResource
{
    
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_RATES = 'rates';
    const FIELD_KEY = 'key';

    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getDescription();
    
    /**
     *
     * @return TaxRateCollection|null
     */
    public function getRates();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setName(?string $name): void;
    
    public function setDescription(?string $description): void;
    
    public function setRates(?TaxRateCollection $rates): void;
    
    public function setKey(?string $key): void;
}