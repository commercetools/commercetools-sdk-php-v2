<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchLongRangeValue extends SearchQueryExpressionValue
{
    public const FIELD_GTE = 'gte';
    public const FIELD_GT = 'gt';
    public const FIELD_LTE = 'lte';
    public const FIELD_LT = 'lt';

    /**

     * @return null|int
     */
    public function getGte();

    /**

     * @return null|int
     */
    public function getGt();

    /**

     * @return null|int
     */
    public function getLte();

    /**

     * @return null|int
     */
    public function getLt();

    /**
     * @param ?int $gte
     */
    public function setGte(?int $gte): void;

    /**
     * @param ?int $gt
     */
    public function setGt(?int $gt): void;

    /**
     * @param ?int $lte
     */
    public function setLte(?int $lte): void;

    /**
     * @param ?int $lt
     */
    public function setLt(?int $lt): void;
}
