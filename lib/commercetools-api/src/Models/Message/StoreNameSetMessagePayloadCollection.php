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
 * @extends MessagePayloadCollection<StoreNameSetMessagePayload>
 * @method StoreNameSetMessagePayload current()
 * @method StoreNameSetMessagePayload end()
 * @method StoreNameSetMessagePayload at($offset)
 */
class StoreNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreNameSetMessagePayload $value
     * @psalm-param StoreNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreNameSetMessagePayload $data */
                $data = StoreNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
