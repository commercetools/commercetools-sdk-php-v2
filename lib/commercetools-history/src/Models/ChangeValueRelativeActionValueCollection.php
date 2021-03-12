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
 * @extends MapperSequence<ChangeValueRelativeActionValue>
 * @method ChangeValueRelativeActionValue current()
 * @method ChangeValueRelativeActionValue at($offset)
 */
class ChangeValueRelativeActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueRelativeActionValue $value
     * @psalm-param ChangeValueRelativeActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueRelativeActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueRelativeActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueRelativeActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueRelativeActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueRelativeActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
