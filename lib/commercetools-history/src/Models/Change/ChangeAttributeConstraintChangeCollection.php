<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeAttributeConstraintChange>
 * @method ChangeAttributeConstraintChange current()
 * @method ChangeAttributeConstraintChange at($offset)
 */
class ChangeAttributeConstraintChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAttributeConstraintChange $value
     * @psalm-param ChangeAttributeConstraintChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAttributeConstraintChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAttributeConstraintChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAttributeConstraintChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAttributeConstraintChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAttributeConstraintChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
