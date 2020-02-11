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
 * @extends MapperSequence<CustomLineItem>
 * @method CustomLineItem current()
 * @method CustomLineItem at($offset)
 */
class CustomLineItemCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItem $value
     * @psalm-param CustomLineItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItem
     */
    protected function mapper()
    {
        return function (int $index): ?CustomLineItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomLineItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
