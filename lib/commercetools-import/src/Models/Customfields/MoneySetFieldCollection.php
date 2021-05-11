<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Customfields\CustomFieldCollection;
use stdClass;

/**
 * @extends CustomFieldCollection<MoneySetField>
 * @method MoneySetField current()
 * @method MoneySetField at($offset)
 */
class MoneySetFieldCollection extends CustomFieldCollection
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
                /** @var MoneySetField $data */
                $data = MoneySetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
