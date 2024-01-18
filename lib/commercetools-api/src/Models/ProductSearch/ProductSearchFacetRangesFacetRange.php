<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetRangesFacetRange extends JsonObject
{
    public const FIELD_FROM = 'from';
    public const FIELD_TO = 'to';
    public const FIELD_KEY = 'key';

    /**
     * <p>Starting value of the bucket (inclusive).</p>
     *

     * @return null|mixed
     */
    public function getFrom();

    /**
     * <p>Ending value of the bucket (non-inclusive).</p>
     *

     * @return null|mixed
     */
    public function getTo();

    /**
     * <p>Key to assign the bucket.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param mixed $from
     */
    public function setFrom($from): void;

    /**
     * @param mixed $to
     */
    public function setTo($to): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
