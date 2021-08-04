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
 * @extends AttributeCollection<DateSetAttribute>
 * @method DateSetAttribute current()
 * @method DateSetAttribute at($offset)
 */
class DateSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert DateSetAttribute $value
     * @psalm-param DateSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateSetAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?DateSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateSetAttribute $data */
                $data = DateSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
