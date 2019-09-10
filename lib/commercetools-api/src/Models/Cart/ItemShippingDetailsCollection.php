<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ItemShippingDetails>
 *
 * @method ItemShippingDetails current()
 * @method ItemShippingDetails at($offset)
 */
class ItemShippingDetailsCollection extends MapperSequence
{
    /**
     * @psalm-assert ItemShippingDetails $value
     * @psalm-param ItemShippingDetails|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ItemShippingDetailsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ItemShippingDetails) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ItemShippingDetails
     */
    protected function mapper()
    {
        return function (int $index): ?ItemShippingDetails {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ItemShippingDetailsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
