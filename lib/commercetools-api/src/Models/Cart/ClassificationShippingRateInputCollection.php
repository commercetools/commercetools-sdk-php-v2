<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\ShippingRateInputCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingRateInputCollection<ClassificationShippingRateInput>
 * @method ClassificationShippingRateInput current()
 * @method ClassificationShippingRateInput end()
 * @method ClassificationShippingRateInput at($offset)
 */
class ClassificationShippingRateInputCollection extends ShippingRateInputCollection
{
    /**
     * @psalm-assert ClassificationShippingRateInput $value
     * @psalm-param ClassificationShippingRateInput|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ClassificationShippingRateInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof ClassificationShippingRateInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ClassificationShippingRateInput
     */
    protected function mapper()
    {
        return function (?int $index): ?ClassificationShippingRateInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ClassificationShippingRateInput $data */
                $data = ClassificationShippingRateInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
