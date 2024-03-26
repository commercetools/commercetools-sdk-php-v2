<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchNumberRangeValue extends SearchQueryExpressionValue
{
    public const FIELD_GTE = 'gte';
    public const FIELD_GT = 'gt';
    public const FIELD_LTE = 'lte';
    public const FIELD_LT = 'lt';

    /**

     * @return null|float
     */
    public function getGte();

    /**

     * @return null|float
     */
    public function getGt();

    /**

     * @return null|float
     */
    public function getLte();

    /**

     * @return null|float
     */
    public function getLt();

    /**
     * @param ?float $gte
     */
    public function setGte(?float $gte): void;

    /**
     * @param ?float $gt
     */
    public function setGt(?float $gt): void;

    /**
     * @param ?float $lte
     */
    public function setLte(?float $lte): void;

    /**
     * @param ?float $lt
     */
    public function setLt(?float $lt): void;
}
