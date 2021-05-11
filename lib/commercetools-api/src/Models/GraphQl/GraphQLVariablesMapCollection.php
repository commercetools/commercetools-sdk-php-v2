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
 * @extends MapperSequence<GraphQLVariablesMap>
 * @method GraphQLVariablesMap current()
 * @method GraphQLVariablesMap at($offset)
 */
class GraphQLVariablesMapCollection extends MapperSequence
{
    /**
     * @psalm-assert GraphQLVariablesMap $value
     * @psalm-param GraphQLVariablesMap|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLVariablesMapCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLVariablesMap) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLVariablesMap
     */
    protected function mapper()
    {
        return function (int $index): ?GraphQLVariablesMap {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLVariablesMap $data */
                $data = GraphQLVariablesMapModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
