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
 * @extends MapperSequence<SetTextLineItemCustomTypeAction>
 * @method SetTextLineItemCustomTypeAction current()
 * @method SetTextLineItemCustomTypeAction at($offset)
 */
class SetTextLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTextLineItemCustomTypeAction $value
     * @psalm-param SetTextLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTextLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
