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

interface ProductSelectionSettingDraft extends JsonObject
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>Resource Identifier of a Product Selection</p>
     *
     * @return null|ProductSelectionResourceIdentifier
     */
    public function getProductSelection();

    /**
     * <p>If <code>true</code> all Products assigned to this Product Selection become part of the Store's assortment.</p>
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
