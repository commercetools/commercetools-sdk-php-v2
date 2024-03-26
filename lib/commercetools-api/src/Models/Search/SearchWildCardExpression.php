<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchWildCardExpression extends SearchQueryExpression
{
    public const FIELD_WILDCARD = 'wildcard';

    /**

     * @return null|SearchAnyValue
     */
    public function getWildcard();

    /**
     * @param ?SearchAnyValue $wildcard
     */
    public function setWildcard(?SearchAnyValue $wildcard): void;
}
