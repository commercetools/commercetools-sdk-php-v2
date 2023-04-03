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
 * @extends GraphQLErrorObjectCollection<GraphQLSearchExecutionFailureError>
 * @method GraphQLSearchExecutionFailureError current()
 * @method GraphQLSearchExecutionFailureError end()
 * @method GraphQLSearchExecutionFailureError at($offset)
 */
class GraphQLSearchExecutionFailureErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSearchExecutionFailureError $value
     * @psalm-param GraphQLSearchExecutionFailureError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSearchExecutionFailureErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSearchExecutionFailureError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSearchExecutionFailureError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSearchExecutionFailureError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSearchExecutionFailureError $data */
                $data = GraphQLSearchExecutionFailureErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
