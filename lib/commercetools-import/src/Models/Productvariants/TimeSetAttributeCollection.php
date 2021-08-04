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
 * @extends AttributeCollection<TimeSetAttribute>
 * @method TimeSetAttribute current()
 * @method TimeSetAttribute end()
 * @method TimeSetAttribute at($offset)
 */
class TimeSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert TimeSetAttribute $value
     * @psalm-param TimeSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeSetAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?TimeSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TimeSetAttribute $data */
                $data = TimeSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
