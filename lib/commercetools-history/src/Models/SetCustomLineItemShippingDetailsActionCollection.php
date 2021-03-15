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
 * @extends MapperSequence<SetCustomLineItemShippingDetailsAction>
 * @method SetCustomLineItemShippingDetailsAction current()
 * @method SetCustomLineItemShippingDetailsAction at($offset)
 */
class SetCustomLineItemShippingDetailsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemShippingDetailsAction $value
     * @psalm-param SetCustomLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
