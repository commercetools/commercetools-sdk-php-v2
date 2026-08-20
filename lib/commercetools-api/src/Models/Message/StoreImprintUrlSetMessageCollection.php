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
 * @extends MessageCollection<StoreImprintUrlSetMessage>
 * @method StoreImprintUrlSetMessage current()
 * @method StoreImprintUrlSetMessage end()
 * @method StoreImprintUrlSetMessage at($offset)
 */
class StoreImprintUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreImprintUrlSetMessage $value
     * @psalm-param StoreImprintUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreImprintUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreImprintUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreImprintUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreImprintUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreImprintUrlSetMessage $data */
                $data = StoreImprintUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
