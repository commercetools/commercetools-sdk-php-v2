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
 * @extends MapperSequence<ChangeLineItemQuantityAction>
 * @method ChangeLineItemQuantityAction current()
 * @method ChangeLineItemQuantityAction at($offset)
 */
class ChangeLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLineItemQuantityAction $value
     * @psalm-param ChangeLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
