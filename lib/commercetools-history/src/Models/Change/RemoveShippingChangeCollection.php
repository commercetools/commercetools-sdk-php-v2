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
 * @extends ChangeCollection<RemoveShippingChange>
 * @method RemoveShippingChange current()
 * @method RemoveShippingChange end()
 * @method RemoveShippingChange at($offset)
 */
class RemoveShippingChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveShippingChange $value
     * @psalm-param RemoveShippingChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveShippingChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveShippingChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveShippingChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveShippingChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveShippingChange $data */
                $data = RemoveShippingChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
