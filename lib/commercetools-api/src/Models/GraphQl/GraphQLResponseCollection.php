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
 * @extends MapperSequence<GraphQLResponse>
 * @method GraphQLResponse current()
 * @method GraphQLResponse at($offset)
 */
class GraphQLResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert GraphQLResponse $value
     * @psalm-param GraphQLResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLResponse
     */
    protected function mapper()
    {
        return function (int $index): ?GraphQLResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GraphQLResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
