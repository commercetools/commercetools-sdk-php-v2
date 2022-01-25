<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreAddProductSelectionAction extends StoreUpdateAction
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';

    /**
     * <p>A Product Selection to be added to the current Product Selections of this Store.</p>
     *
     * @return null|ProductSelectionSettingDraft
     */
    public function getProductSelection();

    /**
     * @param ?ProductSelectionSettingDraft $productSelection
     */
    public function setProductSelection(?ProductSelectionSettingDraft $productSelection): void;
}
