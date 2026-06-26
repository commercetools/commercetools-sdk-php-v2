<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BulkOperationMaxItemsExceededError extends ErrorObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_PROVIDED = 'provided';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The bulk request exceeds the maximum allowed items of $limit.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Maximum number of items allowed in a single bulk request.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of items provided in the request.</p>
     *

     * @return null|int
     */
    public function getProvided();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $provided
     */
    public function setProvided(?int $provided): void;
}
