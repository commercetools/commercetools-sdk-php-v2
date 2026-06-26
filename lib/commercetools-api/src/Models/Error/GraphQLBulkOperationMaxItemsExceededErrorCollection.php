<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLBulkOperationMaxItemsExceededError>
 * @method GraphQLBulkOperationMaxItemsExceededError current()
 * @method GraphQLBulkOperationMaxItemsExceededError end()
 * @method GraphQLBulkOperationMaxItemsExceededError at($offset)
 */
class GraphQLBulkOperationMaxItemsExceededErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLBulkOperationMaxItemsExceededError $value
     * @psalm-param GraphQLBulkOperationMaxItemsExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLBulkOperationMaxItemsExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLBulkOperationMaxItemsExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLBulkOperationMaxItemsExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLBulkOperationMaxItemsExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLBulkOperationMaxItemsExceededError $data */
                $data = GraphQLBulkOperationMaxItemsExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
