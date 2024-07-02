<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<ProductPriceCustomFieldChangedMessagePayload>
 * @method ProductPriceCustomFieldChangedMessagePayload current()
 * @method ProductPriceCustomFieldChangedMessagePayload end()
 * @method ProductPriceCustomFieldChangedMessagePayload at($offset)
 */
class ProductPriceCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldChangedMessagePayload $value
     * @psalm-param ProductPriceCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldChangedMessagePayload $data */
                $data = ProductPriceCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
