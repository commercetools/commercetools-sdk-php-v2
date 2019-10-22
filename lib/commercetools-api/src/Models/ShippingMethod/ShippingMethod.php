<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;

interface ShippingMethod extends LoggedResource
{
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_ZONE_RATES = 'zoneRates';
    const FIELD_IS_DEFAULT = 'isDefault';
    const FIELD_PREDICATE = 'predicate';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return null|ZoneRateCollection
     */
    public function getZoneRates();

    /**
     * @return null|bool
     */
    public function getIsDefault();

    /**
     * @return null|string
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
