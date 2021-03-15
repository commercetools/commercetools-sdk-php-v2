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
 * @extends MapperSequence<ChangeSortOrderAction>
 * @method ChangeSortOrderAction current()
 * @method ChangeSortOrderAction at($offset)
 */
class ChangeSortOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeSortOrderAction $value
     * @psalm-param ChangeSortOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSortOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSortOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSortOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeSortOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeSortOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
