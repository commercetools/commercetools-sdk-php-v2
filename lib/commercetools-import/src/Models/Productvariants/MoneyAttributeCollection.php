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
 * @extends MapperSequence<MoneyAttribute>
 * @method MoneyAttribute current()
 * @method MoneyAttribute at($offset)
 */
class MoneyAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert MoneyAttribute $value
     * @psalm-param MoneyAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoneyAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoneyAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoneyAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?MoneyAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MoneyAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
