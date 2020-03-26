<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface SimilarProductsTaskStatus extends JsonObject
{
    public const FIELD_STATE = 'state';
    public const FIELD_EXPIRES = 'expires';
    public const FIELD_RESULT = 'result';

    /**
     * @return null|string
     */
    public function getState();

    /**
     * <p>The expiry date of the result. You cannot access the result after the expiry date. Default: 1 day after the result first becomes available. This is only available when the TaskStatus state is SUCCESS.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpires();

    /**
     * <p>The response to an asynchronous request. The type depends on the request initiated. Only populated when the status is <code>SUCCESS</code>.</p>
     *
     * @return null|SimilarProductsPagedQueryResult
     */
    public function getResult();

    public function setState(?string $state): void;

    public function setExpires(?DateTimeImmutable $expires): void;

    public function setResult(?SimilarProductsPagedQueryResult $result): void;
}
