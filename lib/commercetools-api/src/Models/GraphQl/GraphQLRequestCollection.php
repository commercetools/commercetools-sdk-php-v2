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
 * @extends MapperSequence<GraphQLRequest>
 * @method GraphQLRequest current()
 * @method GraphQLRequest at($offset)
 */
class GraphQLRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert GraphQLRequest $value
     * @psalm-param GraphQLRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLRequest
     */
    protected function mapper()
    {
        return function (int $index): ?GraphQLRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLRequest $data */
                $data = GraphQLRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
