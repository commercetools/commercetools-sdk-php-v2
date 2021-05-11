<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ItemShippingDetailsDraft>
 * @method ItemShippingDetailsDraft current()
 * @method ItemShippingDetailsDraft at($offset)
 */
class ItemShippingDetailsDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ItemShippingDetailsDraft $value
     * @psalm-param ItemShippingDetailsDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ItemShippingDetailsDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ItemShippingDetailsDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ItemShippingDetailsDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ItemShippingDetailsDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ItemShippingDetailsDraft $data */
                $data = ItemShippingDetailsDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
