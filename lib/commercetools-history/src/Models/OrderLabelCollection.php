<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderLabel>
 * @method OrderLabel current()
 * @method OrderLabel at($offset)
 */
class OrderLabelCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderLabel $value
     * @psalm-param OrderLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLabel
     */
    protected function mapper()
    {
        return function (int $index): ?OrderLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
