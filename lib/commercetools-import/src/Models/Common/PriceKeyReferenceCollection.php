<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceKeyReference>
 * @method PriceKeyReference current()
 * @method PriceKeyReference at($offset)
 */
class PriceKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceKeyReference $value
     * @psalm-param PriceKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?PriceKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PriceKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
