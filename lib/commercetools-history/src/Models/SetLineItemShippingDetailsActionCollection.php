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
 * @extends MapperSequence<SetLineItemShippingDetailsAction>
 * @method SetLineItemShippingDetailsAction current()
 * @method SetLineItemShippingDetailsAction at($offset)
 */
class SetLineItemShippingDetailsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemShippingDetailsAction $value
     * @psalm-param SetLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
