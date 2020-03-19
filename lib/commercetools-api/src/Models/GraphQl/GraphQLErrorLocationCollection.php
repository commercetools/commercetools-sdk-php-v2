<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GraphQLErrorLocation>
 * @method GraphQLErrorLocation current()
 * @method GraphQLErrorLocation at($offset)
 */
class GraphQLErrorLocationCollection extends MapperSequence
{
    /**
     * @psalm-assert GraphQLErrorLocation $value
     * @psalm-param GraphQLErrorLocation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLErrorLocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLErrorLocation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLErrorLocation
     */
    protected function mapper()
    {
        return function (int $index): ?GraphQLErrorLocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GraphQLErrorLocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
