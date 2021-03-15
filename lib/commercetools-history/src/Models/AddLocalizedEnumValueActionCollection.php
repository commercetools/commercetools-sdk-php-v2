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
 * @extends MapperSequence<AddLocalizedEnumValueAction>
 * @method AddLocalizedEnumValueAction current()
 * @method AddLocalizedEnumValueAction at($offset)
 */
class AddLocalizedEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddLocalizedEnumValueAction $value
     * @psalm-param AddLocalizedEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddLocalizedEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddLocalizedEnumValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddLocalizedEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddLocalizedEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
