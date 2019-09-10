<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StatePagedQueryResponse>
 *
 * @method StatePagedQueryResponse current()
 * @method StatePagedQueryResponse at($offset)
 */
class StatePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert StatePagedQueryResponse $value
     * @psalm-param StatePagedQueryResponse|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StatePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof StatePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StatePagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?StatePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StatePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
