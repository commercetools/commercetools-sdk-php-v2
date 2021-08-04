<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetShippingMethodChange>
 * @method SetShippingMethodChange current()
 * @method SetShippingMethodChange end()
 * @method SetShippingMethodChange at($offset)
 */
class SetShippingMethodChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingMethodChange $value
     * @psalm-param SetShippingMethodChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingMethodChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingMethodChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingMethodChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingMethodChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingMethodChange $data */
                $data = SetShippingMethodChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
