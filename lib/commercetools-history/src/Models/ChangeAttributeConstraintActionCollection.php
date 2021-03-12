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
 * @extends MapperSequence<ChangeAttributeConstraintAction>
 * @method ChangeAttributeConstraintAction current()
 * @method ChangeAttributeConstraintAction at($offset)
 */
class ChangeAttributeConstraintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAttributeConstraintAction $value
     * @psalm-param ChangeAttributeConstraintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAttributeConstraintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAttributeConstraintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAttributeConstraintAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAttributeConstraintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAttributeConstraintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
