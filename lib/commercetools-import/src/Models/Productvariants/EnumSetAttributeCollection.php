<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EnumSetAttribute>
 *
 * @method EnumSetAttribute current()
 * @method EnumSetAttribute at($offset)
 */
class EnumSetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumSetAttribute $value
     * @psalm-param EnumSetAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return EnumSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?EnumSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
