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
 * @extends GraphQLErrorObjectCollection<GraphQLOverCapacityError>
 * @method GraphQLOverCapacityError current()
 * @method GraphQLOverCapacityError end()
 * @method GraphQLOverCapacityError at($offset)
 */
class GraphQLOverCapacityErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLOverCapacityError $value
     * @psalm-param GraphQLOverCapacityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLOverCapacityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLOverCapacityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLOverCapacityError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLOverCapacityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLOverCapacityError $data */
                $data = GraphQLOverCapacityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
