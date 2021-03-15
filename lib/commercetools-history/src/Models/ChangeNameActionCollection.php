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
 * @extends MapperSequence<ChangeNameAction>
 * @method ChangeNameAction current()
 * @method ChangeNameAction at($offset)
 */
class ChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeNameAction $value
     * @psalm-param ChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
