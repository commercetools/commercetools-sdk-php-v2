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
 * @implements Builder<GraphQLBulkOperationMaxItemsExceededError>
 */
final class GraphQLBulkOperationMaxItemsExceededErrorBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $provided;

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


    public function build(): GraphQLBulkOperationMaxItemsExceededError
    {
        return new GraphQLBulkOperationMaxItemsExceededErrorModel(
            $this->limit,
            $this->provided
        );
    }

    public static function of(): GraphQLBulkOperationMaxItemsExceededErrorBuilder
    {
        return new self();
    }
}
