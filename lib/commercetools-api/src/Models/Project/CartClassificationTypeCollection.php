<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Project\ShippingRateInputTypeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingRateInputTypeCollection<CartClassificationType>
 * @method CartClassificationType current()
 * @method CartClassificationType at($offset)
 */
class CartClassificationTypeCollection extends ShippingRateInputTypeCollection
{
    /**
     * @psalm-assert CartClassificationType $value
     * @psalm-param CartClassificationType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartClassificationTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartClassificationType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartClassificationType
     */
    protected function mapper()
    {
        return function (?int $index): ?CartClassificationType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartClassificationType $data */
                $data = CartClassificationTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
