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
 * @extends MapperSequence<ChangeTargetChangeValue>
 * @method ChangeTargetChangeValue current()
 * @method ChangeTargetChangeValue at($offset)
 */
class ChangeTargetChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetChangeValue $value
     * @psalm-param ChangeTargetChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
