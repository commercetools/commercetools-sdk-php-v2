<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreCreatedMessagePayload extends MessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_DISTRIBUTION_CHANNELS = 'distributionChannels';
    public const FIELD_SUPPLY_CHANNELS = 'supplyChannels';
    public const FIELD_PRODUCT_SELECTIONS = 'productSelections';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|array
     */
    public function getLanguages();

    /**
     * @return null|ChannelReferenceCollection
     */
    public function getDistributionChannels();

    /**
     * @return null|ChannelReferenceCollection
     */
    public function getSupplyChannels();

    /**
     * @return null|ProductSelectionSettingCollection
     */
    public function getProductSelections();

    /**
     * <p>Serves as value of the <code>custom</code> field on a resource or data type customized with a <a href="ctp:api:type:Type">Type</a>.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;

    /**
     * @param ?ChannelReferenceCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelReferenceCollection $distributionChannels): void;

    /**
     * @param ?ChannelReferenceCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelReferenceCollection $supplyChannels): void;

    /**
     * @param ?ProductSelectionSettingCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingCollection $productSelections): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
