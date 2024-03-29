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
 * @extends AttributeCollection<MoneyAttribute>
 * @method MoneyAttribute current()
 * @method MoneyAttribute end()
 * @method MoneyAttribute at($offset)
 */
class MoneyAttributeCollection extends AttributeCollection
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
        return function (?int $index): ?MoneyAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MoneyAttribute $data */
                $data = MoneyAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
