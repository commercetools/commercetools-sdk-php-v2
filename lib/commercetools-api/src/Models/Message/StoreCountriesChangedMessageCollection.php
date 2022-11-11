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
 * @extends MessageCollection<StoreCountriesChangedMessage>
 * @method StoreCountriesChangedMessage current()
 * @method StoreCountriesChangedMessage end()
 * @method StoreCountriesChangedMessage at($offset)
 */
class StoreCountriesChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreCountriesChangedMessage $value
     * @psalm-param StoreCountriesChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCountriesChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCountriesChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCountriesChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCountriesChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCountriesChangedMessage $data */
                $data = StoreCountriesChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
