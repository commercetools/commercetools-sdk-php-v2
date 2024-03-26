<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchExistsExpression extends SearchQueryExpression
{
    public const FIELD_EXISTS = 'exists';

    /**

     * @return null|SearchExistsValue
     */
    public function getExists();

    /**
     * @param ?SearchExistsValue $exists
     */
    public function setExists(?SearchExistsValue $exists): void;
}
