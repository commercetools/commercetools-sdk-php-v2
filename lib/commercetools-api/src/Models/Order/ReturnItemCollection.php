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
 * @template T of ReturnItem
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ReturnItem current()
 * @method ReturnItem end()
 * @method ReturnItem at($offset)
 */
class ReturnItemCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ReturnItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
