<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionRemoveProductAction extends ProductSelectionUpdateAction
{
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>ResourceIdentifier to Product</p>
     *
     * @return null|ProductResourceIdentifier
     */
    public function getProduct();

    /**
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void;
}
