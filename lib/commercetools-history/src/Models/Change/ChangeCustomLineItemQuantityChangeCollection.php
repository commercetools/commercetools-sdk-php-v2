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
 * @extends ChangeCollection<ChangeCustomLineItemQuantityChange>
 * @method ChangeCustomLineItemQuantityChange current()
 * @method ChangeCustomLineItemQuantityChange end()
 * @method ChangeCustomLineItemQuantityChange at($offset)
 */
class ChangeCustomLineItemQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeCustomLineItemQuantityChange $value
     * @psalm-param ChangeCustomLineItemQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCustomLineItemQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCustomLineItemQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCustomLineItemQuantityChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeCustomLineItemQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeCustomLineItemQuantityChange $data */
                $data = ChangeCustomLineItemQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
