<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\History\Models\ChangeValue\ChangeValueChangeValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeValueChangeValueCollection<ChangeValueRelativeChangeValue>
 * @method ChangeValueRelativeChangeValue current()
 * @method ChangeValueRelativeChangeValue at($offset)
 */
class ChangeValueRelativeChangeValueCollection extends ChangeValueChangeValueCollection
{
    /**
     * @psalm-assert ChangeValueRelativeChangeValue $value
     * @psalm-param ChangeValueRelativeChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueRelativeChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueRelativeChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueRelativeChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeValueRelativeChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeValueRelativeChangeValue $data */
                $data = ChangeValueRelativeChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
