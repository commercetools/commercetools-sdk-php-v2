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
 * @extends ChangeCollection<ChangeLineItemQuantityChange>
 * @method ChangeLineItemQuantityChange current()
 * @method ChangeLineItemQuantityChange at($offset)
 */
class ChangeLineItemQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLineItemQuantityChange $value
     * @psalm-param ChangeLineItemQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLineItemQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLineItemQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLineItemQuantityChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLineItemQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLineItemQuantityChange $data */
                $data = ChangeLineItemQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
