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
 * @extends MapperSequence<ChangeAttributeOrderByNameAction>
 * @method ChangeAttributeOrderByNameAction current()
 * @method ChangeAttributeOrderByNameAction at($offset)
 */
class ChangeAttributeOrderByNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAttributeOrderByNameAction $value
     * @psalm-param ChangeAttributeOrderByNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAttributeOrderByNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAttributeOrderByNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAttributeOrderByNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAttributeOrderByNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAttributeOrderByNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
