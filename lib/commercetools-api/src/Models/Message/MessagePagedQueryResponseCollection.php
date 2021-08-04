<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MessagePagedQueryResponse>
 * @method MessagePagedQueryResponse current()
 * @method MessagePagedQueryResponse at($offset)
 */
class MessagePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert MessagePagedQueryResponse $value
     * @psalm-param MessagePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessagePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof MessagePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessagePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?MessagePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MessagePagedQueryResponse $data */
                $data = MessagePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
