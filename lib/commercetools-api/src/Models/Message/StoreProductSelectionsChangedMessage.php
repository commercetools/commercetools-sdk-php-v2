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

interface StoreProductSelectionsChangedMessage extends Message
{
    public const FIELD_ADDED_PRODUCT_SELECTIONS = 'addedProductSelections';
    public const FIELD_REMOVED_PRODUCT_SELECTIONS = 'removedProductSelections';
    public const FIELD_UPDATED_PRODUCT_SELECTIONS = 'updatedProductSelections';

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getAddedProductSelections();

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getRemovedProductSelections();

    /**

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
