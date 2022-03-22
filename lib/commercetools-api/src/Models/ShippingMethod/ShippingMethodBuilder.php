<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ShippingMethod>
 */
final class ShippingMethodBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedName;

    /**
     * @var ?string
     */
    private $description;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedDescription;

    /**
     * @var null|TaxCategoryReference|TaxCategoryReferenceBuilder
     */
    private $taxCategory;

    /**
     * @var ?ZoneRateCollection
     */
    private $zoneRates;

    /**
     * @var ?bool
     */
    private $isDefault;

    /**
     * @var ?string
     */
    private $predicate;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>The unique ID of the shipping method.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The current version of the shipping method.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-specific unique identifier for the shipping method</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedName()
    {
        return $this->localizedName instanceof LocalizedStringBuilder ? $this->localizedName->build() : $this->localizedName;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedDescription()
    {
        return $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription;
    }

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * @return null|ZoneRateCollection
     */
    public function getZoneRates()
    {
        return $this->zoneRates;
    }

    /**
     * <p>One shipping method in a project can be default.</p>
     *
     * @return null|bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * <p>A Cart predicate which can be used to more precisely select a shipping method for a cart.</p>
     *
     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $localizedName
     * @return $this
     */
    public function withLocalizedName(?LocalizedString $localizedName)
    {
        $this->localizedName = $localizedName;

        return $this;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?LocalizedString $localizedDescription
     * @return $this
     */
    public function withLocalizedDescription(?LocalizedString $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    /**
     * @param ?TaxCategoryReference $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?ZoneRateCollection $zoneRates
     * @return $this
     */
    public function withZoneRates(?ZoneRateCollection $zoneRates)
    {
        $this->zoneRates = $zoneRates;

        return $this;
    }

    /**
     * @param ?bool $isDefault
     * @return $this
     */
    public function withIsDefault(?bool $isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withLocalizedName() instead
     * @return $this
     */
    public function withLocalizedNameBuilder(?LocalizedStringBuilder $localizedName)
    {
        $this->localizedName = $localizedName;

        return $this;
    }

    /**
     * @deprecated use withLocalizedDescription() instead
     * @return $this
     */
    public function withLocalizedDescriptionBuilder(?LocalizedStringBuilder $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): ShippingMethod
    {
        return new ShippingMethodModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->name,
            $this->localizedName instanceof LocalizedStringBuilder ? $this->localizedName->build() : $this->localizedName,
            $this->description,
            $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription,
            $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->zoneRates,
            $this->isDefault,
            $this->predicate,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): ShippingMethodBuilder
    {
        return new self();
    }
}
