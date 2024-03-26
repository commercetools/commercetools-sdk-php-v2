<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface SearchTimeRangeValue extends SearchQueryExpressionValue
{
    public const FIELD_GTE = 'gte';
    public const FIELD_GT = 'gt';
    public const FIELD_LTE = 'lte';
    public const FIELD_LT = 'lt';

    /**

     * @return null|DateTimeImmutable
     */
    public function getGte();

    /**

     * @return null|DateTimeImmutable
     */
    public function getGt();

    /**

     * @return null|DateTimeImmutable
     */
    public function getLte();

    /**

     * @return null|DateTimeImmutable
     */
    public function getLt();

    /**
     * @param ?DateTimeImmutable $gte
     */
    public function setGte(?DateTimeImmutable $gte): void;

    /**
     * @param ?DateTimeImmutable $gt
     */
    public function setGt(?DateTimeImmutable $gt): void;

    /**
     * @param ?DateTimeImmutable $lte
     */
    public function setLte(?DateTimeImmutable $lte): void;

    /**
     * @param ?DateTimeImmutable $lt
     */
    public function setLt(?DateTimeImmutable $lt): void;
}
