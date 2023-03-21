<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreDraft>
 */
final class StoreDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?array
     */
    private $languages;

    /**

     * @var ?StoreCountryCollection
     */
    private $countries;

    /**

     * @var ?ChannelResourceIdentifierCollection
     */
    private $distributionChannels;

    /**

     * @var ?ChannelResourceIdentifierCollection
     */
    private $supplyChannels;

    /**

     * @var ?ProductSelectionSettingDraftCollection
     */
    private $productSelections;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique and immutable identifier for the Store.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the Store.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Languages defined in <a href="ctp:api:type:Project">Project</a>. Only languages defined in the Project can be used.</p>
     *

     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * <p>Countries defined for the Store.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * <p>ResourceIdentifier of a Channel with <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * <p>ResourceIdentifier of a Channel with <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels()
    {
        return $this->supplyChannels;
    }

    /**
     * <p>Controls availability of Products for this Store via active/inactive Product Selections:</p>
     * <ul>
     * <li>Leave empty if all Products in the <a href="ctp:api:type:Project">Project</a> should be available in this Store.</li>
     * <li>If only <code>inactive</code> Product Selections of type <a href="ctp:api:type:IndividualExclusionProductSelectionType">Individual Exclusion</a> are provided, all the Products are availlable in this Store.</li>
     * <li>If all the Product Selections provided are <code>inactive</code> and there's at least a Product Selection of type <code>individual</code>, no Product is availlable in this Store.</li>
     * <li>If at least an <code>active</code> Product Selection is provided, only <code>active</code> Product Selections are considered to compute the availlability in this Store.</li>
     * </ul>
     *

     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections()
    {
        return $this->productSelections;
    }

    /**
     * <p>Custom fields for the Store.</p>
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
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?array $languages
     * @return $this
     */
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $countries
     * @return $this
     */
    public function withCountries(?StoreCountryCollection $countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * @param ?ChannelResourceIdentifierCollection $distributionChannels
     * @return $this
     */
    public function withDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels)
    {
        $this->distributionChannels = $distributionChannels;

        return $this;
    }

    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     * @return $this
     */
    public function withSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels)
    {
        $this->supplyChannels = $supplyChannels;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     * @return $this
     */
    public function withProductSelections(?ProductSelectionSettingDraftCollection $productSelections)
    {
        $this->productSelections = $productSelections;

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
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

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

    public function build(): StoreDraft
    {
        return new StoreDraftModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->languages,
            $this->countries,
            $this->distributionChannels,
            $this->supplyChannels,
            $this->productSelections,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StoreDraftBuilder
    {
        return new self();
    }
}
