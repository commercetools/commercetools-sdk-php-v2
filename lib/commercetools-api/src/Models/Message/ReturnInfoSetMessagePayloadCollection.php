<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<ReturnInfoSetMessagePayload>
 * @method ReturnInfoSetMessagePayload current()
 * @method ReturnInfoSetMessagePayload end()
 * @method ReturnInfoSetMessagePayload at($offset)
 */
class ReturnInfoSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert ReturnInfoSetMessagePayload $value
     * @psalm-param ReturnInfoSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnInfoSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnInfoSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnInfoSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnInfoSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnInfoSetMessagePayload $data */
                $data = ReturnInfoSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
