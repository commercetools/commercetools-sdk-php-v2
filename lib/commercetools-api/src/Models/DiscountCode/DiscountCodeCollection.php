<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<DiscountCode>
 * @method DiscountCode current()
 * @method DiscountCode at($offset)
 */
class DiscountCodeCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert DiscountCode $value
     * @psalm-param DiscountCode|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCode) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCode
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCode {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCode $data */
                $data = DiscountCodeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
