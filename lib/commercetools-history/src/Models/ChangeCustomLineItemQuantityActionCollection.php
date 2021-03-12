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
 * @extends MapperSequence<ChangeCustomLineItemQuantityAction>
 * @method ChangeCustomLineItemQuantityAction current()
 * @method ChangeCustomLineItemQuantityAction at($offset)
 */
class ChangeCustomLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeCustomLineItemQuantityAction $value
     * @psalm-param ChangeCustomLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCustomLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCustomLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCustomLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeCustomLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeCustomLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
