<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchOrExpression extends ProductSearchCompoundExpression
{
    public const FIELD_OR = 'or';

    /**

     * @return null|ProductSearchQueryCollection
     */
    public function getOr();

    /**
     * @param ?ProductSearchQueryCollection $or
     */
    public function setOr(?ProductSearchQueryCollection $or): void;
}
