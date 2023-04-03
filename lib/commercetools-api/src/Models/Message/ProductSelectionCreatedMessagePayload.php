<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\ProductSelectionType;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionCreatedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';

    /**
     * <p>The <code>type</code> and <code>name</code> of the individual Product Selection.</p>
     *

     * @return null|ProductSelectionType
     */
    public function getProductSelection();

    /**
     * @param ?ProductSelectionType $productSelection
     */
    public function setProductSelection(?ProductSelectionType $productSelection): void;
}
