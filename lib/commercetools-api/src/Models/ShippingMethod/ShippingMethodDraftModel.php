<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingMethodDraftModel extends JsonObjectModel implements ShippingMethodDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $localizedName;

    /**
     * @var ?string
     */
    protected $description;

    /**
     * @var ?LocalizedString
     */
    protected $localizedDescription;

    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     * @var ?ZoneRateDraftCollection
     */
    protected $zoneRates;

    /**
     * @var ?bool
     */
    protected $isDefault;

    /**
     * @var ?string
     */
    protected $predicate;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $name = null,
        ?LocalizedString $localizedName = null,
        ?string $description = null,
        ?LocalizedString $localizedDescription = null,
        ?TaxCategoryResourceIdentifier $taxCategory = null,
        ?ZoneRateDraftCollection $zoneRates = null,
        ?bool $isDefault = null,
        ?string $predicate = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->localizedName = $localizedName;
        $this->description = $description;
        $this->localizedDescription = $localizedDescription;
        $this->taxCategory = $taxCategory;
        $this->zoneRates = $zoneRates;
        $this->isDefault = $isDefault;
        $this->predicate = $predicate;
        $this->custom = $custom;
    }

    /**
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
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates()
    {
        if (is_null($this->zoneRates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ZONE_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->zoneRates = ZoneRateDraftCollection::fromArray($data);
        }

        return $this->zoneRates;
    }

    /**
     * <p>If <code>true</code> the shipping method will be the default one in a project.</p>
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
     * <p>A Cart predicate which can be used to more precisely select a shipping method for a cart.</p>
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
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
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
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?ZoneRateDraftCollection $zoneRates
     */
    public function setZoneRates(?ZoneRateDraftCollection $zoneRates): void
    {
        $this->zoneRates = $zoneRates;
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
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
