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
 * @extends MapperSequence<SetExpectedDeliveryAction>
 * @method SetExpectedDeliveryAction current()
 * @method SetExpectedDeliveryAction at($offset)
 */
class SetExpectedDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetExpectedDeliveryAction $value
     * @psalm-param SetExpectedDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetExpectedDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetExpectedDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetExpectedDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetExpectedDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetExpectedDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
