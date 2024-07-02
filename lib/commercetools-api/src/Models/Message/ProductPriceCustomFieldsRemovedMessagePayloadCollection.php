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
 * @extends MessagePayloadCollection<ProductPriceCustomFieldsRemovedMessagePayload>
 * @method ProductPriceCustomFieldsRemovedMessagePayload current()
 * @method ProductPriceCustomFieldsRemovedMessagePayload end()
 * @method ProductPriceCustomFieldsRemovedMessagePayload at($offset)
 */
class ProductPriceCustomFieldsRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldsRemovedMessagePayload $value
     * @psalm-param ProductPriceCustomFieldsRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldsRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldsRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldsRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldsRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldsRemovedMessagePayload $data */
                $data = ProductPriceCustomFieldsRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
