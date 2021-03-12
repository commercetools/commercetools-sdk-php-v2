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
 * @extends MapperSequence<SetReturnPaymentStateAction>
 * @method SetReturnPaymentStateAction current()
 * @method SetReturnPaymentStateAction at($offset)
 */
class SetReturnPaymentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetReturnPaymentStateAction $value
     * @psalm-param SetReturnPaymentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnPaymentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnPaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnPaymentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetReturnPaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetReturnPaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
