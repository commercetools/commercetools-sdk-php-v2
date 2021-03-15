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
 * @extends MapperSequence<RemoveEnumValuesAction>
 * @method RemoveEnumValuesAction current()
 * @method RemoveEnumValuesAction at($offset)
 */
class RemoveEnumValuesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveEnumValuesAction $value
     * @psalm-param RemoveEnumValuesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveEnumValuesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveEnumValuesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveEnumValuesAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveEnumValuesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveEnumValuesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
