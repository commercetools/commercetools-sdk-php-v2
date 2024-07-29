<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_LOCALIZED_NAME = 'localizedName';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCALIZED_DESCRIPTION = 'localizedDescription';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_ZONE_RATES = 'zoneRates';
    public const FIELD_ACTIVE = 'active';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the ShippingMethod.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Unique name for the ShippingMethod within a <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Localized name of the ShippingMethod.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedName();

    /**
     * <p>Description of the ShippingMethod.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Localized description of the ShippingMethod.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedDescription();

    /**
     * <p><a href="ctp:api:type:TaxCategory">TaxCategory</a> for all ZoneRates of the ShippingMethod.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>Defines <a href="ctp:api:type:ShippingRate">ShippingRates</a> (prices) for specific zones.</p>
     *

     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates();

    /**
     * <p>If set to <code>true</code>, the ShippingMethod can be used during the creation or update of a Cart or Order.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * <p>If set to <code>true</code>, the ShippingMethod will be the <a href="ctp:api:type:Project">Project</a>'s default ShippingMethod.</p>
     *

     * @return null|bool
     */
    public function getIsDefault();

    /**
     * <p>Valid <a href="/projects/predicates#cart-predicates">Cart predicate</a> to select a ShippingMethod for a Cart.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Custom Fields for the ShippingMethod.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?LocalizedString $localizedName
     */
    public function setLocalizedName(?LocalizedString $localizedName): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?LocalizedString $localizedDescription
     */
    public function setLocalizedDescription(?LocalizedString $localizedDescription): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?ZoneRateDraftCollection $zoneRates
     */
    public function setZoneRates(?ZoneRateDraftCollection $zoneRates): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;

    /**
     * @param ?bool $isDefault
     */
    public function setIsDefault(?bool $isDefault): void;

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
