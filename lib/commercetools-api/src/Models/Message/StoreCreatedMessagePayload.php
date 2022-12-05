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
use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreCreatedMessagePayload extends MessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_COUNTRIES = 'countries';
    public const FIELD_DISTRIBUTION_CHANNELS = 'distributionChannels';
    public const FIELD_SUPPLY_CHANNELS = 'supplyChannels';
    public const FIELD_PRODUCT_SELECTIONS = 'productSelections';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>The <code>name</code> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Languages of the <a href="ctp:api:type:Store">Store</a> that was created. Languages are represented as <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tags</a>.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getCountries();

    /**
     * <p><a href="ctp:api:type:ChannelRoleEnum">Distribution Channels</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getDistributionChannels();

    /**
     * <p><a href="ctp:api:type:ChannelRoleEnum">Supply Channels</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getSupplyChannels();

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> of the <a href="ctp:api:type:Store">Store</a> that was created.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getProductSelections();

    /**
     * <p><a href="ctp:api:type:CustomFields">Custom Fields</a> on the <a href="ctp:api:type:Store">Store</a> that was created.</p>
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
     * @param ?StoreCountryCollection $countries
     */
    public function setCountries(?StoreCountryCollection $countries): void;

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
