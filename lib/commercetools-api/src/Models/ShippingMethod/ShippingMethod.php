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
     * <p>The unique ID of the shipping method.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the shipping method.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-specific unique identifier for the shipping method</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedName();

    /**
     * @return null|string
     */
    public function getDescription();

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedDescription();

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return null|ZoneRateCollection
     */
    public function getZoneRates();

    /**
     * <p>One shipping method in a project can be default.</p>
     *
     * @return null|bool
     */
    public function getIsDefault();

    /**
     * <p>A Cart predicate which can be used to more precisely select a shipping method for a cart.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    /**
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
