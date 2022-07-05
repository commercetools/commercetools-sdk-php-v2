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
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
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

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedName;

    /**
     * @deprecated
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

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier for the ShippingMethod.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the ShippingMethod.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Localized name of the ShippingMethod.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedName()
    {
        return $this->localizedName instanceof LocalizedStringBuilder ? $this->localizedName->build() : $this->localizedName;
    }

    /**
     * <p>Description of the ShippingMethod.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Localized description of the ShippingMethod.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedDescription()
    {
        return $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription;
    }

    /**
     * <p><a href="ctp:api:type:TaxCategory">TaxCategory</a> for all ZoneRates of the ShippingMethod.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>Defines <a href="ctp:api:type:ShippingRate">ShippingRates</a> (prices) for specific zones.</p>
     *

     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates()
    {
        return $this->zoneRates;
    }

    /**
     * <p>If <code>true</code> the ShippingMethod will be the <a href="ctp:api:type:Project">Project</a>'s default ShippingMethod.</p>
     *

     * @return null|bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * <p>Valid <a href="/projects/predicates#cart-predicates">Cart predicate</a> to select a ShippingMethod for a Cart.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>Custom Fields for the ShippingMethod.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?ZoneRateDraftCollection $zoneRates
     * @return $this
     */
    public function withZoneRates(?ZoneRateDraftCollection $zoneRates)
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
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

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
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): ShippingMethodDraft
    {
        return new ShippingMethodDraftModel(
            $this->key,
            $this->name,
            $this->localizedName instanceof LocalizedStringBuilder ? $this->localizedName->build() : $this->localizedName,
            $this->description,
            $this->localizedDescription instanceof LocalizedStringBuilder ? $this->localizedDescription->build() : $this->localizedDescription,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->zoneRates,
            $this->isDefault,
            $this->predicate,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): ShippingMethodDraftBuilder
    {
        return new self();
    }
}
