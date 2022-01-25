<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreRemoveProductSelectionAction extends StoreUpdateAction
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';

    /**
     * <p>A Product Selection to be removed from the current Product Selections of this Store.</p>
     *
     * @return null|ResourceIdentifier
     */
    public function getProductSelection();

    /**
     * @param ?ResourceIdentifier $productSelection
     */
    public function setProductSelection(?ResourceIdentifier $productSelection): void;
}
