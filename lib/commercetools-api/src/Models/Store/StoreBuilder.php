<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
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
 * @implements Builder<Store>
 */
final class StoreBuilder implements Builder
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

     * @var ?ChannelReferenceCollection
     */
    private $distributionChannels;

    /**

     * @var ?ChannelReferenceCollection
     */
    private $supplyChannels;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $productSelections;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>Unique ID of the Store.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Store.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Store was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Store was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the Store.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Store.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique and immutable identifier for the Store.</p>
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
     * <p>Languages configured for the Store.</p>
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
     * <p>Product Distribution Channels allowed for the Store.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * <p>Inventory Supply Channels allowed for the Store.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getSupplyChannels()
    {
        return $this->supplyChannels;
    }

    /**
     * <p>Controls availability of Products for this Store via Product Selections:</p>
     * <ul>
     * <li>Leave empty if all Products in the <a href="ctp:api:type:Project">Project</a> should be available in this Store.</li>
     * <li>If only <code>inactive</code> Product Selections with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a> are provided, all the Products are availlable in this Store.</li>
     * <li>If all the Product Selections provided are <code>inactive</code> and there's at least a Product Selection of mode <code>Individual</code>, no Product is availlable in this Store.</li>
     * <li>If at least an <code>active</code> Product Selection is provided, only <code>active</code> Product Selections are considered to compute the availlability in this Store.</li>
     * </ul>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getProductSelections()
    {
        return $this->productSelections;
    }

    /**
     * <p>Custom fields for the Store.</p>
     *

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
     * @param ?ChannelReferenceCollection $distributionChannels
     * @return $this
     */
    public function withDistributionChannels(?ChannelReferenceCollection $distributionChannels)
    {
        $this->distributionChannels = $distributionChannels;

        return $this;
    }

    /**
     * @param ?ChannelReferenceCollection $supplyChannels
     * @return $this
     */
    public function withSupplyChannels(?ChannelReferenceCollection $supplyChannels)
    {
        $this->supplyChannels = $supplyChannels;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $productSelections
     * @return $this
     */
    public function withProductSelections(?ProductSelectionSettingCollection $productSelections)
    {
        $this->productSelections = $productSelections;

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
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): Store
    {
        return new StoreModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->languages,
            $this->countries,
            $this->distributionChannels,
            $this->supplyChannels,
            $this->productSelections,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StoreBuilder
    {
        return new self();
    }
}
