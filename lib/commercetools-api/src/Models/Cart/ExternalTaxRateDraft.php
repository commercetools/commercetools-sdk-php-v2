<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\TaxCategory\SubRateCollection;

interface ExternalTaxRateDraft extends JsonObject
{
    
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';
    const FIELD_SUB_RATES = 'subRates';
    const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';

    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return int|null
     */
    public function getAmount();
    
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
    
    /**
     *
     * @return SubRateCollection|null
     */
    public function getSubRates();
    
    /**
     *
     * @return bool|null
     */
    public function getIncludedInPrice();
    public function setName(?string $name): void;
    
    public function setAmount(?int $amount): void;
    
    public function setCountry(?string $country): void;
    
    public function setState(?string $state): void;
    
    public function setSubRates(?SubRateCollection $subRates): void;
    
    public function setIncludedInPrice(?bool $includedInPrice): void;
}