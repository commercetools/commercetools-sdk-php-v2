<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFullTextExpression extends ProductSearchQueryExpression
{
    public const FIELD_FULL_TEXT = 'fullText';

    /**

     * @return null|ProductSearchFullTextValue
     */
    public function getFullText();

    /**
     * @param ?ProductSearchFullTextValue $fullText
     */
    public function setFullText(?ProductSearchFullTextValue $fullText): void;
}
