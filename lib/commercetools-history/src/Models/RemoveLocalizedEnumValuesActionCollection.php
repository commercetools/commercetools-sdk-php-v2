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
 * @extends MapperSequence<RemoveLocalizedEnumValuesAction>
 * @method RemoveLocalizedEnumValuesAction current()
 * @method RemoveLocalizedEnumValuesAction at($offset)
 */
class RemoveLocalizedEnumValuesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveLocalizedEnumValuesAction $value
     * @psalm-param RemoveLocalizedEnumValuesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveLocalizedEnumValuesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveLocalizedEnumValuesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveLocalizedEnumValuesAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveLocalizedEnumValuesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveLocalizedEnumValuesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
