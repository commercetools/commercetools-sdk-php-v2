<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLDuplicatePriceScopeError extends GraphQLErrorObject
{
    public const FIELD_CONFLICTING_PRICE = 'conflictingPrice';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Conflicting Embedded Price.</p>
     *

     * @return null|Price
     */
    public function getConflictingPrice();

    /**
     * @param ?Price $conflictingPrice
     */
    public function setConflictingPrice(?Price $conflictingPrice): void;
}
