<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;

interface ShippingMethod extends BaseResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_ZONE_RATES = 'zoneRates';
    const FIELD_IS_DEFAULT = 'isDefault';
    const FIELD_PREDICATE = 'predicate';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
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
     * @return TaxCategoryReference|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return ZoneRateCollection|null
     */
    public function getZoneRates();
    
    /**
     *
     * @return bool|null
     */
    public function getIsDefault();
    
    /**
     *
     * @return string|null
     */
    public function getPredicate();
    public function setKey(?string $key): void;
    
    public function setName(?string $name): void;
    
    public function setDescription(?string $description): void;
    
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;
    
    public function setZoneRates(?ZoneRateCollection $zoneRates): void;
    
    public function setIsDefault(?bool $isDefault): void;
    
    public function setPredicate(?string $predicate): void;
}