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
 * @extends MapperSequence<ChangeOrderStateAction>
 * @method ChangeOrderStateAction current()
 * @method ChangeOrderStateAction at($offset)
 */
class ChangeOrderStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeOrderStateAction $value
     * @psalm-param ChangeOrderStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeOrderStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeOrderStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeOrderStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeOrderStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeOrderStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
