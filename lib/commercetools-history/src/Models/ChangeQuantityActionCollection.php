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
 * @extends MapperSequence<ChangeQuantityAction>
 * @method ChangeQuantityAction current()
 * @method ChangeQuantityAction at($offset)
 */
class ChangeQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeQuantityAction $value
     * @psalm-param ChangeQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
