<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ShippingMethod extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_LOCALIZED_NAME = 'localizedName';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCALIZED_DESCRIPTION = 'localizedDescription';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_ZONE_RATES = 'zoneRates';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique identifier of the ShippingMethod.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the ShippingMethod.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the ShippingMethod was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ShippingMethod was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the ShippingMethod.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Unique name of the ShippingMethod within a <a href="ctp:api:type:Project">Project</a>.</p>
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
     * <p><a href="ctp:api:type:TaxCategory">TaxCategory</a> of all ZoneRates of the ShippingMethod.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <p>Defines <a href="ctp:api:type:ShippingRate">ShippingRates</a> (prices) for specific Zones.</p>
     *

     * @return null|ZoneRateCollection
     */
    public function getZoneRates();

    /**
     * <p>If <code>true</code> this ShippingMethod is the <a href="ctp:api:type:Project">Project</a>'s default ShippingMethod.</p>
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
     * <p>Custom Fields of the ShippingMethod.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

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
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;

    /**
     * @param ?ZoneRateCollection $zoneRates
     */
    public function setZoneRates(?ZoneRateCollection $zoneRates): void;

    /**
     * @param ?bool $isDefault
     */
    public function setIsDefault(?bool $isDefault): void;

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
