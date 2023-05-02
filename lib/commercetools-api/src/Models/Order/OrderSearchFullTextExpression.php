<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchFullTextExpression extends OrderSearchQueryExpression
{
    public const FIELD_FULL_TEXT = 'fullText';

    /**

     * @return null|OrderSearchFullTextValue
     */
    public function getFullText();

    /**
     * @param ?OrderSearchFullTextValue $fullText
     */
    public function setFullText(?OrderSearchFullTextValue $fullText): void;
}
