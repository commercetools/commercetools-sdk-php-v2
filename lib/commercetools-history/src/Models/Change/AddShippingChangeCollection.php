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
 * @extends ChangeCollection<AddShippingChange>
 * @method AddShippingChange current()
 * @method AddShippingChange end()
 * @method AddShippingChange at($offset)
 */
class AddShippingChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddShippingChange $value
     * @psalm-param AddShippingChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddShippingChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddShippingChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddShippingChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddShippingChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddShippingChange $data */
                $data = AddShippingChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
