<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ItemState>
 * @method ItemState current()
 * @method ItemState at($offset)
 */
class ItemStateCollection extends MapperSequence
{
    /**
     * @psalm-assert ItemState $value
     * @psalm-param ItemState|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ItemStateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ItemState) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ItemState
     */
    protected function mapper()
    {
        return function (int $index): ?ItemState {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ItemState $data */
                $data = ItemStateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
