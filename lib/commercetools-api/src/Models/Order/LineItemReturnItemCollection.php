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
 * @extends MapperSequence<LineItemReturnItem>
 *
 * @method LineItemReturnItem current()
 * @method LineItemReturnItem at($offset)
 */
class LineItemReturnItemCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemReturnItem $value
     * @psalm-param LineItemReturnItem|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return LineItemReturnItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemReturnItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemReturnItem
     */
    protected function mapper()
    {
        return function (int $index): ?LineItemReturnItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LineItemReturnItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
