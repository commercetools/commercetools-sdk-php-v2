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
 * @extends MessagePayloadCollection<StoreImprintUrlSetMessagePayload>
 * @method StoreImprintUrlSetMessagePayload current()
 * @method StoreImprintUrlSetMessagePayload end()
 * @method StoreImprintUrlSetMessagePayload at($offset)
 */
class StoreImprintUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreImprintUrlSetMessagePayload $value
     * @psalm-param StoreImprintUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreImprintUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreImprintUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreImprintUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreImprintUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreImprintUrlSetMessagePayload $data */
                $data = StoreImprintUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
