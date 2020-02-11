<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChannelPagedQueryResponse>
 * @method ChannelPagedQueryResponse current()
 * @method ChannelPagedQueryResponse at($offset)
 */
class ChannelPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ChannelPagedQueryResponse $value
     * @psalm-param ChannelPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChannelPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChannelPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChannelPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ChannelPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
