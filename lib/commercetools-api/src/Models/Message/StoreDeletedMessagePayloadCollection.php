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
 * @extends MessagePayloadCollection<StoreDeletedMessagePayload>
 * @method StoreDeletedMessagePayload current()
 * @method StoreDeletedMessagePayload end()
 * @method StoreDeletedMessagePayload at($offset)
 */
class StoreDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreDeletedMessagePayload $value
     * @psalm-param StoreDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreDeletedMessagePayload $data */
                $data = StoreDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
