<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreCreatedMessagePayload>
 */
final class StoreCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?array
     */
    private $languages;

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

    public function build(): StoreCreatedMessagePayload
    {
        return new StoreCreatedMessagePayloadModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->languages,
            $this->distributionChannels,
            $this->supplyChannels,
            $this->productSelections,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StoreCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
