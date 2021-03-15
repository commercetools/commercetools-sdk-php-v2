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
 * @extends MapperSequence<ChangeEnumValueLabelAction>
 * @method ChangeEnumValueLabelAction current()
 * @method ChangeEnumValueLabelAction at($offset)
 */
class ChangeEnumValueLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeEnumValueLabelAction $value
     * @psalm-param ChangeEnumValueLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
