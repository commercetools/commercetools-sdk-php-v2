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
 * @extends MapperSequence<DeliveryItem>
 * @method DeliveryItem current()
 * @method DeliveryItem at($offset)
 */
class DeliveryItemCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryItem $value
     * @psalm-param DeliveryItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryItem
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryItem $data */
                $data = DeliveryItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
