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
 * @extends MapperSequence<MoneySetAttribute>
 *
 * @method MoneySetAttribute current()
 * @method MoneySetAttribute at($offset)
 */
class MoneySetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert MoneySetAttribute $value
     * @psalm-param MoneySetAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MoneySetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoneySetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoneySetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?MoneySetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MoneySetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
