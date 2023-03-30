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
 * @extends GraphQLErrorObjectCollection<GraphQLSearchDeactivatedError>
 * @method GraphQLSearchDeactivatedError current()
 * @method GraphQLSearchDeactivatedError end()
 * @method GraphQLSearchDeactivatedError at($offset)
 */
class GraphQLSearchDeactivatedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSearchDeactivatedError $value
     * @psalm-param GraphQLSearchDeactivatedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSearchDeactivatedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSearchDeactivatedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSearchDeactivatedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSearchDeactivatedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSearchDeactivatedError $data */
                $data = GraphQLSearchDeactivatedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
