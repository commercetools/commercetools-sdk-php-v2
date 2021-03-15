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
 * @extends MapperSequence<SetOrderLineItemCustomTypeAction>
 * @method SetOrderLineItemCustomTypeAction current()
 * @method SetOrderLineItemCustomTypeAction at($offset)
 */
class SetOrderLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetOrderLineItemCustomTypeAction $value
     * @psalm-param SetOrderLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetOrderLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
