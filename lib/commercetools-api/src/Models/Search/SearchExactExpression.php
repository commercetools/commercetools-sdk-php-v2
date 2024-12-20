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

     * @return null|SearchExactValue
     */
    public function getExact();

    /**
     * @param ?SearchExactValue $exact
     */
    public function setExact(?SearchExactValue $exact): void;
}
