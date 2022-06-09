<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\ProductSelection\ProductSelectionReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionSetting extends JsonObject
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>Reference to a ProductSelection.</p>
     *
     * @return null|ProductSelectionReference
     */
    public function getProductSelection();

    /**
     * <p>If <code>true</code>, all Products assigned to this Product Selection are part of the Store's assortment.</p>
     *
     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
