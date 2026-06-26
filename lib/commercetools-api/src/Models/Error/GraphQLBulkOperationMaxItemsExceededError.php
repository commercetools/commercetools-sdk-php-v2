<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLBulkOperationMaxItemsExceededError extends GraphQLErrorObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_PROVIDED = 'provided';

    /**

     * @return null|string
     */
    public function getCode();

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
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $provided
     */
    public function setProvided(?int $provided): void;
}
