<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<ProductPriceCustomFieldsSetMessage>
 * @method ProductPriceCustomFieldsSetMessage current()
 * @method ProductPriceCustomFieldsSetMessage end()
 * @method ProductPriceCustomFieldsSetMessage at($offset)
 */
class ProductPriceCustomFieldsSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldsSetMessage $value
     * @psalm-param ProductPriceCustomFieldsSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldsSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldsSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldsSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldsSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldsSetMessage $data */
                $data = ProductPriceCustomFieldsSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
