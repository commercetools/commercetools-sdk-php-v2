<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_DISTRIBUTION_CHANNELS = 'distributionChannels';
    public const FIELD_SUPPLY_CHANNELS = 'supplyChannels';
    public const FIELD_PRODUCT_SELECTIONS = 'productSelections';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique and immutable identifier for the Store.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Store.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Languages defined in <a href="ctp:api:type:Project">Project</a>. Only languages defined in the Project can be used.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * <p>ResourceIdentifier to a Channel with <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels();

    /**
     * <p>ResourceIdentifier to a Channel with <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels();

    /**
     * <p>Controls availability of Products for this Store via active Product Selections.</p>
     * <ul>
     * <li>Leave empty if all Products in the <a href="ctp:api:type:Project">Project</a> should be available in this Store.</li>
     * <li>If provided, Products from <code>active</code> Product Selections are available in this Store.</li>
     * </ul>
     *

     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections();

    /**
     * <p>Custom fields for the Store.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;

    /**
     * @param ?ChannelResourceIdentifierCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels): void;

    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels): void;

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingDraftCollection $productSelections): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
