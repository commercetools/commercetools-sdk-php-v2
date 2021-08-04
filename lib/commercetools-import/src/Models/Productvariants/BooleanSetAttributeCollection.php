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
 * @extends AttributeCollection<BooleanSetAttribute>
 * @method BooleanSetAttribute current()
 * @method BooleanSetAttribute end()
 * @method BooleanSetAttribute at($offset)
 */
class BooleanSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert BooleanSetAttribute $value
     * @psalm-param BooleanSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BooleanSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof BooleanSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BooleanSetAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?BooleanSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BooleanSetAttribute $data */
                $data = BooleanSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
