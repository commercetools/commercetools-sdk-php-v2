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
 * @extends ChangeValueChangeValueCollection<ChangeValueExternalChangeValue>
 * @method ChangeValueExternalChangeValue current()
 * @method ChangeValueExternalChangeValue at($offset)
 */
class ChangeValueExternalChangeValueCollection extends ChangeValueChangeValueCollection
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
        return function (?int $index): ?ChangeValueExternalChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeValueExternalChangeValue $data */
                $data = ChangeValueExternalChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
