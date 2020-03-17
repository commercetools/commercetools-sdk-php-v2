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


    public function __construct(
        string $key = null,
        string $name = null,
        string $description = null,
        LocalizedString $localizedDescription = null,
        TaxCategoryResourceIdentifier $taxCategory = null,
        ZoneRateDraftCollection $zoneRates = null,
        bool $isDefault = null,
        string $predicate = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->localizedDescription = $localizedDescription;
        $this->taxCategory = $taxCategory;
        $this->zoneRates = $zoneRates;
        $this->isDefault = $isDefault;
        $this->predicate = $predicate;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_KEY);
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
            $data = $this->raw(ShippingMethodDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_DESCRIPTION);
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
            $data = $this->raw(ShippingMethodDraft::FIELD_LOCALIZED_DESCRIPTION);
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
            $data = $this->raw(ShippingMethodDraft::FIELD_TAX_CATEGORY);
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
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_ZONE_RATES);
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
            $data = $this->raw(ShippingMethodDraft::FIELD_IS_DEFAULT);
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
            $data = $this->raw(ShippingMethodDraft::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setLocalizedDescription(?LocalizedString $localizedDescription): void
    {
        $this->localizedDescription = $localizedDescription;
    }

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function setZoneRates(?ZoneRateDraftCollection $zoneRates): void
    {
        $this->zoneRates = $zoneRates;
    }

    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
}
