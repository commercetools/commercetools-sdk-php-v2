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
 * @extends MessageCollection<StoreContactUrlSetMessage>
 * @method StoreContactUrlSetMessage current()
 * @method StoreContactUrlSetMessage end()
 * @method StoreContactUrlSetMessage at($offset)
 */
class StoreContactUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreContactUrlSetMessage $value
     * @psalm-param StoreContactUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreContactUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreContactUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreContactUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreContactUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreContactUrlSetMessage $data */
                $data = StoreContactUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
