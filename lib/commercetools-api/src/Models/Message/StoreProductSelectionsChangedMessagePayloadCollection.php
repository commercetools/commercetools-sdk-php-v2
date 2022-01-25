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
 * @extends MessagePayloadCollection<StoreProductSelectionsChangedMessagePayload>
 * @method StoreProductSelectionsChangedMessagePayload current()
 * @method StoreProductSelectionsChangedMessagePayload end()
 * @method StoreProductSelectionsChangedMessagePayload at($offset)
 */
class StoreProductSelectionsChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreProductSelectionsChangedMessagePayload $value
     * @psalm-param StoreProductSelectionsChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreProductSelectionsChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreProductSelectionsChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreProductSelectionsChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreProductSelectionsChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreProductSelectionsChangedMessagePayload $data */
                $data = StoreProductSelectionsChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
