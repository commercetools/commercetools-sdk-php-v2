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
 * @extends MapperSequence<ReferenceAttribute>
 * @method ReferenceAttribute current()
 * @method ReferenceAttribute at($offset)
 */
class ReferenceAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert ReferenceAttribute $value
     * @psalm-param ReferenceAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?ReferenceAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReferenceAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
