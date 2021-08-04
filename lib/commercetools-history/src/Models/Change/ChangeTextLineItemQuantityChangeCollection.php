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
 * @extends ChangeCollection<ChangeTextLineItemQuantityChange>
 * @method ChangeTextLineItemQuantityChange current()
 * @method ChangeTextLineItemQuantityChange at($offset)
 */
class ChangeTextLineItemQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTextLineItemQuantityChange $value
     * @psalm-param ChangeTextLineItemQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTextLineItemQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTextLineItemQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTextLineItemQuantityChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTextLineItemQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTextLineItemQuantityChange $data */
                $data = ChangeTextLineItemQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
