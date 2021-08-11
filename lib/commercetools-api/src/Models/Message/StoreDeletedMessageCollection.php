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
 * @extends MessageCollection<StoreDeletedMessage>
 * @method StoreDeletedMessage current()
 * @method StoreDeletedMessage end()
 * @method StoreDeletedMessage at($offset)
 */
class StoreDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreDeletedMessage $value
     * @psalm-param StoreDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreDeletedMessage $data */
                $data = StoreDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
