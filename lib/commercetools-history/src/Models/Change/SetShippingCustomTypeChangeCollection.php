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
 * @extends ChangeCollection<SetShippingCustomTypeChange>
 * @method SetShippingCustomTypeChange current()
 * @method SetShippingCustomTypeChange end()
 * @method SetShippingCustomTypeChange at($offset)
 */
class SetShippingCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingCustomTypeChange $value
     * @psalm-param SetShippingCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingCustomTypeChange $data */
                $data = SetShippingCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
