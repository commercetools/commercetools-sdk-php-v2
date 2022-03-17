<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TermFacetResult extends FacetResult
{
    public const FIELD_DATA_TYPE = 'dataType';
    public const FIELD_MISSING = 'missing';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OTHER = 'other';
    public const FIELD_TERMS = 'terms';

    /**
     * @return null|string
     */
    public function getDataType();

    /**
     * @return null|int
     */
    public function getMissing();

    /**
     * @return null|int
     */
    public function getTotal();

    /**
     * @return null|int
     */
    public function getOther();

    /**
     * @return null|FacetTermCollection
     */
    public function getTerms();

    /**
     * @param ?string $dataType
     */
    public function setDataType(?string $dataType): void;

    /**
     * @param ?int $missing
     */
    public function setMissing(?int $missing): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $other
     */
    public function setOther(?int $other): void;

    /**
     * @param ?FacetTermCollection $terms
     */
    public function setTerms(?FacetTermCollection $terms): void;
}
