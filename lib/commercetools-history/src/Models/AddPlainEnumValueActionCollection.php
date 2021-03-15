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
 * @extends MapperSequence<AddPlainEnumValueAction>
 * @method AddPlainEnumValueAction current()
 * @method AddPlainEnumValueAction at($offset)
 */
class AddPlainEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddPlainEnumValueAction $value
     * @psalm-param AddPlainEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPlainEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPlainEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPlainEnumValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddPlainEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddPlainEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
