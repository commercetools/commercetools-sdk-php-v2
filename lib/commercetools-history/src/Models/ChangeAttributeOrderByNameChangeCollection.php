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
 * @extends MapperSequence<ChangeAttributeOrderByNameChange>
 * @method ChangeAttributeOrderByNameChange current()
 * @method ChangeAttributeOrderByNameChange at($offset)
 */
class ChangeAttributeOrderByNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAttributeOrderByNameChange $value
     * @psalm-param ChangeAttributeOrderByNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAttributeOrderByNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAttributeOrderByNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAttributeOrderByNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAttributeOrderByNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAttributeOrderByNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
