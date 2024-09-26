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
 * @extends GraphQLErrorObjectCollection<GraphQLSearchNotReadyError>
 * @method GraphQLSearchNotReadyError current()
 * @method GraphQLSearchNotReadyError end()
 * @method GraphQLSearchNotReadyError at($offset)
 */
class GraphQLSearchNotReadyErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSearchNotReadyError $value
     * @psalm-param GraphQLSearchNotReadyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSearchNotReadyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSearchNotReadyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSearchNotReadyError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSearchNotReadyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSearchNotReadyError $data */
                $data = GraphQLSearchNotReadyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
