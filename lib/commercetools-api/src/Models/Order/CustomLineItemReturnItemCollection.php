<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\ReturnItemCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReturnItemCollection<CustomLineItemReturnItem>
 * @method CustomLineItemReturnItem current()
 * @method CustomLineItemReturnItem at($offset)
 */
class CustomLineItemReturnItemCollection extends ReturnItemCollection
{
    /**
     * @psalm-assert CustomLineItemReturnItem $value
     * @psalm-param CustomLineItemReturnItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemReturnItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemReturnItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemReturnItem
     */
    protected function mapper()
    {
        return function (int $index): ?CustomLineItemReturnItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemReturnItem $data */
                $data = CustomLineItemReturnItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
