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
 * @extends MapperSequence<ChangeTargetShippingChangeValue>
 * @method ChangeTargetShippingChangeValue current()
 * @method ChangeTargetShippingChangeValue at($offset)
 */
class ChangeTargetShippingChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetShippingChangeValue $value
     * @psalm-param ChangeTargetShippingChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetShippingChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetShippingChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetShippingChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetShippingChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetShippingChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
