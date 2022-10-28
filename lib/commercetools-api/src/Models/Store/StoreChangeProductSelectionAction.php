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

interface StoreChangeProductSelectionAction extends StoreUpdateAction
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>Current Product Selection of the Store to be activated or deactivated.</p>
     *

     * @return null|ProductSelectionResourceIdentifier
     */
    public function getProductSelection();

    /**
     * <p>Set to <code>true</code> if all Products assigned to the Product Selection should become part of the Store's assortment.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?ProductSelectionResourceIdentifier $productSelection
     */
    public function setProductSelection(?ProductSelectionResourceIdentifier $productSelection): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
