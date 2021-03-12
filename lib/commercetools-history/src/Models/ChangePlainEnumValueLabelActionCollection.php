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
 * @extends MapperSequence<ChangePlainEnumValueLabelAction>
 * @method ChangePlainEnumValueLabelAction current()
 * @method ChangePlainEnumValueLabelAction at($offset)
 */
class ChangePlainEnumValueLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePlainEnumValueLabelAction $value
     * @psalm-param ChangePlainEnumValueLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePlainEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePlainEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePlainEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePlainEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePlainEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
