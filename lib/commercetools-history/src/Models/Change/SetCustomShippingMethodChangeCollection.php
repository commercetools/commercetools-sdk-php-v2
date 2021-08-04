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
 * @extends ChangeCollection<SetCustomShippingMethodChange>
 * @method SetCustomShippingMethodChange current()
 * @method SetCustomShippingMethodChange at($offset)
 */
class SetCustomShippingMethodChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomShippingMethodChange $value
     * @psalm-param SetCustomShippingMethodChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomShippingMethodChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomShippingMethodChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomShippingMethodChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomShippingMethodChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomShippingMethodChange $data */
                $data = SetCustomShippingMethodChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
