<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<OrderReference>
 * @method OrderReference current()
 * @method OrderReference at($offset)
 */
class OrderReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert OrderReference $value
     * @psalm-param OrderReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReference
     */
    protected function mapper()
    {
        return function (int $index): ?OrderReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReference $data */
                $data = OrderReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
