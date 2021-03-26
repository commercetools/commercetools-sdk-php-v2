<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReturnItem>
 * @method ReturnItem current()
 * @method ReturnItem at($offset)
 */
class ReturnItemCollection extends MapperSequence
{
    /**
     * @psalm-assert ReturnItem $value
     * @psalm-param ReturnItem|stdClass $value
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
     * @psalm-return callable(int):?ReturnItem
     */
    protected function mapper()
    {
        return function (int $index): ?ReturnItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReturnItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
