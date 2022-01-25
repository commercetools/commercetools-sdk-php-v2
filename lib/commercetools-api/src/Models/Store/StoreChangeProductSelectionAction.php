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

interface StoreChangeProductSelectionAction extends StoreUpdateAction
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>A current Product Selection of this Store that is to be activated or deactivated.</p>
     *
     * @return null|ResourceIdentifier
     */
    public function getProductSelection();

    /**
     * <p>If <code>true</code> all Products assigned to the Product Selection become part of the Store's assortment.</p>
     *
     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?ResourceIdentifier $productSelection
     */
    public function setProductSelection(?ResourceIdentifier $productSelection): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
