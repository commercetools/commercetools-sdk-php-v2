<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodDraft>
 */
final class ShippingMethodDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $description;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedDescription;

    /**
     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**
     * @var ?ZoneRateDraftCollection
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
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates()
    {
        return $this->zoneRates;
    }

    /**
     * <p>If <code>true</code> the shipping method will be the default one in a project.</p>
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
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocalizedDescription(?LocalizedString $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withZoneRates(?ZoneRateDraftCollection $zoneRates)
    {
        $this->zoneRates = $zoneRates;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsDefault(?bool $isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocalizedDescriptionBuilder(?LocalizedStringBuilder $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    public function build(): ShippingMethodDraft
    {
        return new ShippingMethodDraftModel(
            $this->key,
            $this->name,
            $this->description,
            $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->zoneRates,
            $this->isDefault,
            $this->predicate
        );
    }

    public static function of(): ShippingMethodDraftBuilder
    {
        return new self();
    }
}
