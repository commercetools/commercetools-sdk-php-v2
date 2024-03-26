<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchFullTextPrefixExpression extends SearchQueryExpression
{
    public const FIELD_FULL_TEXT_PREFIX = 'fullTextPrefix';

    /**

     * @return null|SearchFullTextPrefixValue
     */
    public function getFullTextPrefix();

    /**
     * @param ?SearchFullTextPrefixValue $fullTextPrefix
     */
    public function setFullTextPrefix(?SearchFullTextPrefixValue $fullTextPrefix): void;
}
