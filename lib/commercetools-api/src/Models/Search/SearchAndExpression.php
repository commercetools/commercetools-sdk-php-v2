<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchAndExpression extends SearchCompoundExpression
{
    public const FIELD_AND = 'and';

    /**

     * @return null|SearchQueryCollection
     */
    public function getAnd();

    /**
     * @param ?SearchQueryCollection $and
     */
    public function setAnd(?SearchQueryCollection $and): void;
}
