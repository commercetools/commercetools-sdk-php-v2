<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchFullTextExpression extends SearchQueryExpression
{
    public const FIELD_FULL_TEXT = 'fullText';

    /**

     * @return null|SearchFullTextValue
     */
    public function getFullText();

    /**
     * @param ?SearchFullTextValue $fullText
     */
    public function setFullText(?SearchFullTextValue $fullText): void;
}
