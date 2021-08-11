<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<StoreCreatedMessage>
 * @method StoreCreatedMessage current()
 * @method StoreCreatedMessage end()
 * @method StoreCreatedMessage at($offset)
 */
class StoreCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreCreatedMessage $value
     * @psalm-param StoreCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCreatedMessage $data */
                $data = StoreCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
