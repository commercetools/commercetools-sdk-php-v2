<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchNotExpression extends SearchCompoundExpression
{
    public const FIELD_NOT = 'not';

    /**

     * @return null|SearchQueryCollection
     */
    public function getNot();

    /**
     * @param ?SearchQueryCollection $not
     */
    public function setNot(?SearchQueryCollection $not): void;
}
