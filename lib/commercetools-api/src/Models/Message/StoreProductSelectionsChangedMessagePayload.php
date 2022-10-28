<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreProductSelectionsChangedMessagePayload extends MessagePayload
{
    public const FIELD_ADDED_PRODUCT_SELECTIONS = 'addedProductSelections';
    public const FIELD_REMOVED_PRODUCT_SELECTIONS = 'removedProductSelections';
    public const FIELD_UPDATED_PRODUCT_SELECTIONS = 'updatedProductSelections';

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> that were added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getAddedProductSelections();

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> that were removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getRemovedProductSelections();

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> that were updated in the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getUpdatedProductSelections();

    /**
     * @param ?ProductSelectionSettingCollection $addedProductSelections
     */
    public function setAddedProductSelections(?ProductSelectionSettingCollection $addedProductSelections): void;

    /**
     * @param ?ProductSelectionSettingCollection $removedProductSelections
     */
    public function setRemovedProductSelections(?ProductSelectionSettingCollection $removedProductSelections): void;

    /**
     * @param ?ProductSelectionSettingCollection $updatedProductSelections
     */
    public function setUpdatedProductSelections(?ProductSelectionSettingCollection $updatedProductSelections): void;
}
