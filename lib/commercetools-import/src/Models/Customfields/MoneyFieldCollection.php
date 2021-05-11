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
 * @extends CustomFieldCollection<MoneyField>
 * @method MoneyField current()
 * @method MoneyField at($offset)
 */
class MoneyFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert MoneyField $value
     * @psalm-param MoneyField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoneyFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoneyField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoneyField
     */
    protected function mapper()
    {
        return function (int $index): ?MoneyField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MoneyField $data */
                $data = MoneyFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
