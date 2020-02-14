<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<BooleanField>
 * @method BooleanField current()
 * @method BooleanField at($offset)
 */
class BooleanFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert BooleanField $value
     * @psalm-param BooleanField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BooleanFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof BooleanField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BooleanField
     */
    protected function mapper()
    {
        return function (int $index): ?BooleanField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = BooleanFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
