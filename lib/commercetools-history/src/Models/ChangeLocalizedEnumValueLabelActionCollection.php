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
 * @extends MapperSequence<ChangeLocalizedEnumValueLabelAction>
 * @method ChangeLocalizedEnumValueLabelAction current()
 * @method ChangeLocalizedEnumValueLabelAction at($offset)
 */
class ChangeLocalizedEnumValueLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLocalizedEnumValueLabelAction $value
     * @psalm-param ChangeLocalizedEnumValueLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLocalizedEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLocalizedEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
