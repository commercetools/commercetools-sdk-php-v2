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
 * @extends GraphQLErrorObjectCollection<GraphQLSearchIndexingInProgressError>
 * @method GraphQLSearchIndexingInProgressError current()
 * @method GraphQLSearchIndexingInProgressError end()
 * @method GraphQLSearchIndexingInProgressError at($offset)
 */
class GraphQLSearchIndexingInProgressErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSearchIndexingInProgressError $value
     * @psalm-param GraphQLSearchIndexingInProgressError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSearchIndexingInProgressErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSearchIndexingInProgressError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSearchIndexingInProgressError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSearchIndexingInProgressError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSearchIndexingInProgressError $data */
                $data = GraphQLSearchIndexingInProgressErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
