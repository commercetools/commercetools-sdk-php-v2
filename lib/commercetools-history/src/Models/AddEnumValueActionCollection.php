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
 * @extends MapperSequence<AddEnumValueAction>
 * @method AddEnumValueAction current()
 * @method AddEnumValueAction at($offset)
 */
class AddEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddEnumValueAction $value
     * @psalm-param AddEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddEnumValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
