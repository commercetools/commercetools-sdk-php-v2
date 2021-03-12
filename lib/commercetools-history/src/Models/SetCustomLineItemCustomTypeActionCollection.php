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
 * @extends MapperSequence<SetCustomLineItemCustomTypeAction>
 * @method SetCustomLineItemCustomTypeAction current()
 * @method SetCustomLineItemCustomTypeAction at($offset)
 */
class SetCustomLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemCustomTypeAction $value
     * @psalm-param SetCustomLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
