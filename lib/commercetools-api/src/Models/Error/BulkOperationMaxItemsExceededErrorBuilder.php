<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BulkOperationMaxItemsExceededError>
 */
final class BulkOperationMaxItemsExceededErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $provided;

    /**
     * <p><code>&quot;The bulk request exceeds the maximum allowed items of $limit.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Maximum number of items allowed in a single bulk request.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Number of items provided in the request.</p>
     *

     * @return null|int
     */
    public function getProvided()
    {
        return $this->provided;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $provided
     * @return $this
     */
    public function withProvided(?int $provided)
    {
        $this->provided = $provided;

        return $this;
    }


    public function build(): BulkOperationMaxItemsExceededError
    {
        return new BulkOperationMaxItemsExceededErrorModel(
            $this->message,
            $this->limit,
            $this->provided
        );
    }

    public static function of(): BulkOperationMaxItemsExceededErrorBuilder
    {
        return new self();
    }
}
