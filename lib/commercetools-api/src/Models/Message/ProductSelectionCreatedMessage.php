<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\IndividualProductSelectionType;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionCreatedMessage extends Message
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';

    /**
     * <p>The <code>type</code> and <code>name</code> of the individual Product Selection.</p>
     *

     * @return null|IndividualProductSelectionType
     */
    public function getProductSelection();

    /**
     * @param ?IndividualProductSelectionType $productSelection
     */
    public function setProductSelection(?IndividualProductSelectionType $productSelection): void;
}
