<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
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
 * @implements Builder<StoreCreatedMessage>
 */
final class StoreCreatedMessageBuilder implements Builder
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

     * @var ?int
     */
    private $sequenceNumber;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**

     * @var ?int
     */
    private $resourceVersion;

    /**

     * @var null|UserProvidedIdentifiers|UserProvidedIdentifiersBuilder
     */
    private $resourceUserProvidedIdentifiers;

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
     * <p>Unique identifier of the Message. Can be used to track which Messages have been processed.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Version of a resource. In case of Messages, this is always <code>1</code>.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Message was generated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Value of <code>createdAt</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Value of <code>createdBy</code>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Message number in relation to other Messages for a given resource. The <code>sequenceNumber</code> of the next Message for the resource is the successor of the <code>sequenceNumber</code> of the current Message. Meaning, the <code>sequenceNumber</code> of the next Message equals the <code>sequenceNumber</code> of the current Message + 1.
     * <code>sequenceNumber</code> can be used to ensure that Messages are processed in the correct order for a particular resource.</p>
     *

     * @return null|int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource on which the change or action was performed.</p>
     *

     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p>Version of the resource on which the change or action was performed.</p>
     *

     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * <p>User-provided identifiers of the resource, such as <code>key</code> or <code>externalId</code>. Only present if the resource has such identifiers.</p>
     *

     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        return $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers;
    }

    /**
     * <p>The <code>name</code> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Languages of the <a href="ctp:api:type:Store">Store</a> that was created. Languages are represented as <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tags</a>.</p>
     *

     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * <p><a href="ctp:api:type:ChannelRoleEnum">Distribution Channels</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * <p><a href="ctp:api:type:ChannelRoleEnum">Supply Channels</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getSupplyChannels()
    {
        return $this->supplyChannels;
    }

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getProductSelections()
    {
        return $this->productSelections;
    }

    /**
     * <p><a href="ctp:api:type:CustomFields">Custom Fields</a> on the <a href="ctp:api:type:Store">Store</a> that was created.</p>
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
     * @param ?int $sequenceNumber
     * @return $this
     */
    public function withSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @param ?Reference $resource
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?int $resourceVersion
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     * @return $this
     */
    public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

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
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withResourceUserProvidedIdentifiers() instead
     * @return $this
     */
    public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

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

    public function build(): StoreCreatedMessage
    {
        return new StoreCreatedMessageModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->sequenceNumber,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->resourceVersion,
            $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->languages,
            $this->countries,
            $this->distributionChannels,
            $this->supplyChannels,
            $this->productSelections,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StoreCreatedMessageBuilder
    {
        return new self();
    }
}
