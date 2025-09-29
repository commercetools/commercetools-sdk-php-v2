<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchFuzzyExpression extends SearchQueryExpression
{
    public const FIELD_FUZZY = 'fuzzy';

    /**

     * @return null|SearchFuzzyValue
     */
    public function getFuzzy();

    /**
     * @param ?SearchFuzzyValue $fuzzy
     */
    public function setFuzzy(?SearchFuzzyValue $fuzzy): void;
}
