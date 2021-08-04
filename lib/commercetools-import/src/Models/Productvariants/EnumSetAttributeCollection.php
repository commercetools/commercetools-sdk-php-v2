<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @extends AttributeCollection<EnumSetAttribute>
 * @method EnumSetAttribute current()
 * @method EnumSetAttribute at($offset)
 */
class EnumSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert EnumSetAttribute $value
     * @psalm-param EnumSetAttribute|stdClass $value
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
        return function (?int $index): ?EnumSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EnumSetAttribute $data */
                $data = EnumSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
