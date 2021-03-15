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
 * @extends MapperSequence<ChangeTextLineItemNameAction>
 * @method ChangeTextLineItemNameAction current()
 * @method ChangeTextLineItemNameAction at($offset)
 */
class ChangeTextLineItemNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTextLineItemNameAction $value
     * @psalm-param ChangeTextLineItemNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTextLineItemNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTextLineItemNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTextLineItemNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTextLineItemNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTextLineItemNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
