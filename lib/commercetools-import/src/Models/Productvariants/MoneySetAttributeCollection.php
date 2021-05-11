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
 * @extends AttributeCollection<MoneySetAttribute>
 * @method MoneySetAttribute current()
 * @method MoneySetAttribute at($offset)
 */
class MoneySetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert MoneySetAttribute $value
     * @psalm-param MoneySetAttribute|stdClass $value
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
                /** @var MoneySetAttribute $data */
                $data = MoneySetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
