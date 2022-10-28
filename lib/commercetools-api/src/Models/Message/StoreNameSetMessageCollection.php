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
 * @extends MessageCollection<StoreNameSetMessage>
 * @method StoreNameSetMessage current()
 * @method StoreNameSetMessage end()
 * @method StoreNameSetMessage at($offset)
 */
class StoreNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreNameSetMessage $value
     * @psalm-param StoreNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreNameSetMessage $data */
                $data = StoreNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
