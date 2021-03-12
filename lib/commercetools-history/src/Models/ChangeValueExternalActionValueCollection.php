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
 * @extends MapperSequence<ChangeValueExternalActionValue>
 * @method ChangeValueExternalActionValue current()
 * @method ChangeValueExternalActionValue at($offset)
 */
class ChangeValueExternalActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueExternalActionValue $value
     * @psalm-param ChangeValueExternalActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueExternalActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueExternalActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueExternalActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueExternalActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueExternalActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
