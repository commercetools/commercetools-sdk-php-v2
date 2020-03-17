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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ShippingMethod extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCALIZED_DESCRIPTION = 'localizedDescription';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_ZONE_RATES = 'zoneRates';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_PREDICATE = 'predicate';

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
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-specific unique identifier for the shipping method.</p>
     *
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

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setName(?string $name): void;

    public function setDescription(?string $description): void;

    public function setLocalizedDescription(?LocalizedString $localizedDescription): void;

    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;

    public function setZoneRates(?ZoneRateCollection $zoneRates): void;

    public function setIsDefault(?bool $isDefault): void;

    public function setPredicate(?string $predicate): void;
}
