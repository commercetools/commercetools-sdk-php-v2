<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchOrExpression extends SearchCompoundExpression
{
    public const FIELD_OR = 'or';

    /**

     * @return null|SearchQueryCollection
     */
    public function getOr();

    /**
     * @param ?SearchQueryCollection $or
     */
    public function setOr(?SearchQueryCollection $or): void;
}
