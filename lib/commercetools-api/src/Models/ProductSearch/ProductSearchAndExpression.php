<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchAndExpression extends ProductSearchCompoundExpression
{
    public const FIELD_AND = 'and';

    /**

     * @return null|ProductSearchQueryCollection
     */
    public function getAnd();

    /**
     * @param ?ProductSearchQueryCollection $and
     */
    public function setAnd(?ProductSearchQueryCollection $and): void;
}
