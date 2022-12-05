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
 * @extends MessagePayloadCollection<StoreCountriesChangedMessagePayload>
 * @method StoreCountriesChangedMessagePayload current()
 * @method StoreCountriesChangedMessagePayload end()
 * @method StoreCountriesChangedMessagePayload at($offset)
 */
class StoreCountriesChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreCountriesChangedMessagePayload $value
     * @psalm-param StoreCountriesChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCountriesChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCountriesChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCountriesChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCountriesChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCountriesChangedMessagePayload $data */
                $data = StoreCountriesChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
