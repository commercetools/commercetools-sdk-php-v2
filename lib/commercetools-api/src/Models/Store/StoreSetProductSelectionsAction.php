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
     * <p>Value to set.</p>
     * <ul>
     * <li>If provided, Product Selections for which <code>active</code> is set to <code>true</code> are available in the Store.</li>
     * <li>If not provided or provided as empty array, the action removes all Product Selections from this Store, meaning all Products in the <a href="ctp:api:type:Project">Project</a> are available in this Store.</li>
     * </ul>
     *

     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections();

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingDraftCollection $productSelections): void;
}
