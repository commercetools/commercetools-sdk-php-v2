<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductDiscountReference extends Reference
{


    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
