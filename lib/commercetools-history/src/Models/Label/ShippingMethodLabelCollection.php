<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<ShippingMethodLabel>
 * @method ShippingMethodLabel current()
 * @method ShippingMethodLabel end()
 * @method ShippingMethodLabel at($offset)
 */
class ShippingMethodLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert ShippingMethodLabel $value
     * @psalm-param ShippingMethodLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodLabel $data */
                $data = ShippingMethodLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
