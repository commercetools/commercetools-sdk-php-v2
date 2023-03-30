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
 * @extends GraphQLErrorObjectCollection<GraphQLConcurrentModificationError>
 * @method GraphQLConcurrentModificationError current()
 * @method GraphQLConcurrentModificationError end()
 * @method GraphQLConcurrentModificationError at($offset)
 */
class GraphQLConcurrentModificationErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLConcurrentModificationError $value
     * @psalm-param GraphQLConcurrentModificationError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLConcurrentModificationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLConcurrentModificationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLConcurrentModificationError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLConcurrentModificationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLConcurrentModificationError $data */
                $data = GraphQLConcurrentModificationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
