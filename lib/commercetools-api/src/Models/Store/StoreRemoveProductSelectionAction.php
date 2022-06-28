<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreRemoveProductSelectionAction extends StoreUpdateAction
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';

    /**
     * <p>Value to remove. The removed Product Selection is made offline.</p>
     *
     * @return null|ProductSelectionResourceIdentifier
     */
    public function getProductSelection();

    /**
     * @param ?ProductSelectionResourceIdentifier $productSelection
     */
    public function setProductSelection(?ProductSelectionResourceIdentifier $productSelection): void;
}
