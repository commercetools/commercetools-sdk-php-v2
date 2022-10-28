<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<ReturnInfoSetMessage>
 * @method ReturnInfoSetMessage current()
 * @method ReturnInfoSetMessage end()
 * @method ReturnInfoSetMessage at($offset)
 */
class ReturnInfoSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert ReturnInfoSetMessage $value
     * @psalm-param ReturnInfoSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnInfoSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnInfoSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnInfoSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnInfoSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnInfoSetMessage $data */
                $data = ReturnInfoSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
