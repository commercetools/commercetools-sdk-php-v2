<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MoneySetField>
 * @method MoneySetField current()
 * @method MoneySetField at($offset)
 */
class MoneySetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert MoneySetField $value
     * @psalm-param MoneySetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoneySetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoneySetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoneySetField
     */
    protected function mapper()
    {
        return function (int $index): ?MoneySetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MoneySetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
