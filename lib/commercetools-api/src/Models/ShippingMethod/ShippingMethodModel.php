<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ShippingMethodModel extends JsonObjectModel implements ShippingMethod
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $localizedName;

    /**
     * @deprecated
     * @var ?string
     */
    protected $description;

    /**
     *
     * @var ?LocalizedString
     */
    protected $localizedDescription;

    /**
     *
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @var ?ZoneRateCollection
     */
    protected $zoneRates;

    /**
     *
     * @var ?bool
     */
    protected $active;

    /**
     *
     * @var ?bool
     */
    protected $isDefault;

    /**
     *
     * @var ?string
     */
    protected $predicate;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?string $key = null,
        ?string $name = null,
        ?LocalizedString $localizedName = null,
        ?string $description = null,
        ?LocalizedString $localizedDescription = null,
        ?TaxCategoryReference $taxCategory = null,
        ?ZoneRateCollection $zoneRates = null,
        ?bool $active = null,
        ?bool $isDefault = null,
        ?string $predicate = null,
        ?CustomFields $custom = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->name = $name;
        $this->localizedName = $localizedName;
        $this->description = $description;
        $this->localizedDescription = $localizedDescription;
        $this->taxCategory = $taxCategory;
        $this->zoneRates = $zoneRates;
        $this->active = $active;
        $this->isDefault = $isDefault;
        $this->predicate = $predicate;
        $this->custom = $custom;
    }

    /**
     * <p>Unique identifier of the ShippingMethod.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the ShippingMethod.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the ShippingMethod was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the ShippingMethod was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the ShippingMethod.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the ShippingMethod.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the ShippingMethod.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Unique name of the ShippingMethod within a <a href="ctp:api:type:Project">Project</a>.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Localized name of the ShippingMethod.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getLocalizedName()
    {
        if (is_null($this->localizedName)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LOCALIZED_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->localizedName = LocalizedStringModel::of($data);
        }

        return $this->localizedName;
    }

    /**
     * <p>Description of the ShippingMethod.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * <p>Localized description of the ShippingMethod.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getLocalizedDescription()
    {
        if (is_null($this->localizedDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LOCALIZED_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->localizedDescription = LocalizedStringModel::of($data);
        }

        return $this->localizedDescription;
    }

    /**
     * <p><a href="ctp:api:type:TaxCategory">TaxCategory</a> of all ZoneRates of the ShippingMethod.</p>
     *
     *
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <p>Defines <a href="ctp:api:type:ShippingRate">ShippingRates</a> (prices) for specific Zones.</p>
     *
     *
     * @return null|ZoneRateCollection
     */
    public function getZoneRates()
    {
        if (is_null($this->zoneRates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ZONE_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->zoneRates = ZoneRateCollection::fromArray($data);
        }

        return $this->zoneRates;
    }

    /**
     * <p>Indicates if the ShippingMethod is active.</p>
     * <p>If <code>true</code>, the ShippingMethod can be used during the creation or update of a Cart or Order.</p>
     *
     *
     * @return null|bool
     */
    public function getActive()
    {
        if (is_null($this->active)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->active = (bool) $data;
        }

        return $this->active;
    }

    /**
     * <p>If <code>true</code>, this ShippingMethod is the <a href="ctp:api:type:Project">Project</a>'s default ShippingMethod. When retrieving <a href="/projects/shippingMethods#get-matching-shipping-methods">matching Shipping Methods</a>, it is returned as the first item in the array. This flag does not automatically apply the Shipping Method to Carts.</p>
     *
     *
     * @return null|bool
     */
    public function getIsDefault()
    {
        if (is_null($this->isDefault)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->isDefault = (bool) $data;
        }

        return $this->isDefault;
    }

    /**
     * <p>Valid <a href="/projects/predicates#cart-predicates">Cart predicate</a> to select a ShippingMethod for a Cart.</p>
     *
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * <p>Custom Fields of the ShippingMethod.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $localizedName
     */
    public function setLocalizedName(?LocalizedString $localizedName): void
    {
        $this->localizedName = $localizedName;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?LocalizedString $localizedDescription
     */
    public function setLocalizedDescription(?LocalizedString $localizedDescription): void
    {
        $this->localizedDescription = $localizedDescription;
    }

    /**
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?ZoneRateCollection $zoneRates
     */
    public function setZoneRates(?ZoneRateCollection $zoneRates): void
    {
        $this->zoneRates = $zoneRates;
    }

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @param ?bool $isDefault
     */
    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ShippingMethod::FIELD_CREATED_AT]) && $data[ShippingMethod::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ShippingMethod::FIELD_CREATED_AT] = $data[ShippingMethod::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ShippingMethod::FIELD_LAST_MODIFIED_AT]) && $data[ShippingMethod::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ShippingMethod::FIELD_LAST_MODIFIED_AT] = $data[ShippingMethod::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
