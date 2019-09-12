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
 * @extends MapperSequence<EnumAttribute>
 *
 * @method EnumAttribute current()
 * @method EnumAttribute at($offset)
 */
class EnumAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumAttribute $value
     * @psalm-param EnumAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return EnumAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?EnumAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
