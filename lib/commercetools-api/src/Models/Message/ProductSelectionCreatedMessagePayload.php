<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionCreatedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';

    /**
     * <p><a href="ctp:api:type:ProductSelection">Product Selection</a> that was created.</p>
     *

     * @return null|ProductSelection
     */
    public function getProductSelection();

    /**
     * @param ?ProductSelection $productSelection
     */
    public function setProductSelection(?ProductSelection $productSelection): void;
}
