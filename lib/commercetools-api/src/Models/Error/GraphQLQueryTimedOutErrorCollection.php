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
 * @extends GraphQLErrorObjectCollection<GraphQLQueryTimedOutError>
 * @method GraphQLQueryTimedOutError current()
 * @method GraphQLQueryTimedOutError end()
 * @method GraphQLQueryTimedOutError at($offset)
 */
class GraphQLQueryTimedOutErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLQueryTimedOutError $value
     * @psalm-param GraphQLQueryTimedOutError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLQueryTimedOutErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLQueryTimedOutError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLQueryTimedOutError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLQueryTimedOutError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLQueryTimedOutError $data */
                $data = GraphQLQueryTimedOutErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
