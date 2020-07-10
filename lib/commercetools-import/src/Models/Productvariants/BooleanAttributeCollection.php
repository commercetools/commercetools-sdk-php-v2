<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<BooleanAttribute>
 * @method BooleanAttribute current()
 * @method BooleanAttribute at($offset)
 */
class BooleanAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert BooleanAttribute $value
     * @psalm-param BooleanAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BooleanAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof BooleanAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BooleanAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?BooleanAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = BooleanAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
