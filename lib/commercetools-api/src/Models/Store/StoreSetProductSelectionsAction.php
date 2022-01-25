<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetProductSelectionsAction extends StoreUpdateAction
{
    public const FIELD_PRODUCT_SELECTIONS = 'productSelections';

    /**
     * <p>The total of Product Selections to be set for this Store.</p>
     *
     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections();

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingDraftCollection $productSelections): void;
}
