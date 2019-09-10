<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductPriceExternalDiscountSetMessage>
 *
 * @method ProductPriceExternalDiscountSetMessage current()
 * @method ProductPriceExternalDiscountSetMessage at($offset)
 */
class ProductPriceExternalDiscountSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPriceExternalDiscountSetMessage $value
     * @psalm-param ProductPriceExternalDiscountSetMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductPriceExternalDiscountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceExternalDiscountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceExternalDiscountSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPriceExternalDiscountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductPriceExternalDiscountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
