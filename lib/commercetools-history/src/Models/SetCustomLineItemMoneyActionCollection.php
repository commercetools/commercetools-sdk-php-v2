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
 * @extends MapperSequence<SetCustomLineItemMoneyAction>
 * @method SetCustomLineItemMoneyAction current()
 * @method SetCustomLineItemMoneyAction at($offset)
 */
class SetCustomLineItemMoneyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemMoneyAction $value
     * @psalm-param SetCustomLineItemMoneyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemMoneyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemMoneyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemMoneyAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemMoneyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemMoneyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
