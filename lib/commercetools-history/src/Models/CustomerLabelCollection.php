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
 * @extends MapperSequence<CustomerLabel>
 * @method CustomerLabel current()
 * @method CustomerLabel at($offset)
 */
class CustomerLabelCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerLabel $value
     * @psalm-param CustomerLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerLabel
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
