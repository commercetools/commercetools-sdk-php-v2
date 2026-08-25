<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<StoreContactUrlSetMessagePayload>
 * @method StoreContactUrlSetMessagePayload current()
 * @method StoreContactUrlSetMessagePayload end()
 * @method StoreContactUrlSetMessagePayload at($offset)
 */
class StoreContactUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreContactUrlSetMessagePayload $value
     * @psalm-param StoreContactUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreContactUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreContactUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreContactUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreContactUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreContactUrlSetMessagePayload $data */
                $data = StoreContactUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
