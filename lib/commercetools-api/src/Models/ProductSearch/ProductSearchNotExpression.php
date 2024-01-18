<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchNotExpression extends ProductSearchCompoundExpression
{
    public const FIELD_NOT = 'not';

    /**

     * @return null|ProductSearchQueryCollection
     */
    public function getNot();

    /**
     * @param ?ProductSearchQueryCollection $not
     */
    public function setNot(?ProductSearchQueryCollection $not): void;
}
