<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Builder\ShippingMethodUpdateBuilder;
use Commercetools\Types\Common\Resource;

interface ShippingMethod extends Resource
{
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_ZONE_RATES = 'zoneRates';
    const FIELD_IS_DEFAULT = 'isDefault';
    const FIELD_PREDICATE = 'predicate';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return ZoneRateCollection
     */
    public function getZoneRates();

    /**
     * @return mixed
     */
    public function getIsDefault();

    /**
     * @return string
     */
    public function getPredicate();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param ZoneRateCollection $zoneRates
     * @return $this
     */
    public function setZoneRates(ZoneRateCollection $zoneRates);

    /**
     * @param mixed $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault);

    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate);

    /**
     * @return ShippingMethodUpdateBuilder
     */
    public function update();
}
