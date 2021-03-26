<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeValueExternalChangeValue>
 * @method ChangeValueExternalChangeValue current()
 * @method ChangeValueExternalChangeValue at($offset)
 */
class ChangeValueExternalChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueExternalChangeValue $value
     * @psalm-param ChangeValueExternalChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueExternalChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueExternalChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueExternalChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueExternalChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueExternalChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
