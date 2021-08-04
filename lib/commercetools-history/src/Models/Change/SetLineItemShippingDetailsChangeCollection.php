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
 * @extends ChangeCollection<SetLineItemShippingDetailsChange>
 * @method SetLineItemShippingDetailsChange current()
 * @method SetLineItemShippingDetailsChange at($offset)
 */
class SetLineItemShippingDetailsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemShippingDetailsChange $value
     * @psalm-param SetLineItemShippingDetailsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemShippingDetailsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemShippingDetailsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemShippingDetailsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLineItemShippingDetailsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemShippingDetailsChange $data */
                $data = SetLineItemShippingDetailsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
