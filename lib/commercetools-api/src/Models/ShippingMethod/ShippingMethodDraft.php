<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Base\JsonObject;

interface ShippingMethodDraft extends JsonObject
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
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates();

    /**
     * <p>If <code>true</code> the shipping method will be the default one in a project.</p>.
     *
     * @return null|bool
     */
    public function getIsDefault();

    /**
     * <p>A Cart predicate which can be used to more precisely select a shipping method for a cart.</p>.
     *
     * @return null|string
     */
    public function getPredicate();

    public function setKey(?string $key): void;

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    public function setZoneRates(?ZoneRateDraftCollection $zoneRates): void;

    public function setIsDefault(?bool $isDefault): void;

    public function setPredicate(?string $predicate): void;
}
