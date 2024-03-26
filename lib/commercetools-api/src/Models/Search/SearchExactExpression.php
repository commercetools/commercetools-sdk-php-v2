<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchExactExpression extends SearchQueryExpression
{
    public const FIELD_EXACT = 'exact';

    /**

     * @return null|SearchAnyValue
     */
    public function getExact();

    /**
     * @param ?SearchAnyValue $exact
     */
    public function setExact(?SearchAnyValue $exact): void;
}
