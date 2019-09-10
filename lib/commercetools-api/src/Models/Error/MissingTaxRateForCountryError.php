<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface MissingTaxRateForCountryError extends ErrorObject
{
    
    const FIELD_TAX_CATEGORY_ID = 'taxCategoryId';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';

    /**
     *
     * @return string|null
     */
    public function getTaxCategoryId();
    
    /**
     *
     * @return string|null
     */
    public function getCountry();
    
    /**
     *
     * @return string|null
     */
    public function getState();
    public function setTaxCategoryId(?string $taxCategoryId): void;
    
    public function setCountry(?string $country): void;
    
    public function setState(?string $state): void;
}