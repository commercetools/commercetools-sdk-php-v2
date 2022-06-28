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
 * @extends MessageCollection<StoreProductSelectionsChangedMessage>
 * @method StoreProductSelectionsChangedMessage current()
 * @method StoreProductSelectionsChangedMessage end()
 * @method StoreProductSelectionsChangedMessage at($offset)
 */
class StoreProductSelectionsChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreProductSelectionsChangedMessage $value
     * @psalm-param StoreProductSelectionsChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreProductSelectionsChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreProductSelectionsChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreProductSelectionsChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreProductSelectionsChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreProductSelectionsChangedMessage $data */
                $data = StoreProductSelectionsChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
