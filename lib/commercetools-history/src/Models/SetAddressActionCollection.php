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
 * @extends MapperSequence<SetAddressAction>
 * @method SetAddressAction current()
 * @method SetAddressAction at($offset)
 */
class SetAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAddressAction $value
     * @psalm-param SetAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
