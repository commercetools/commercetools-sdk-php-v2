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
 * @extends MessagePayloadCollection<ProductPriceCustomFieldsSetMessagePayload>
 * @method ProductPriceCustomFieldsSetMessagePayload current()
 * @method ProductPriceCustomFieldsSetMessagePayload end()
 * @method ProductPriceCustomFieldsSetMessagePayload at($offset)
 */
class ProductPriceCustomFieldsSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldsSetMessagePayload $value
     * @psalm-param ProductPriceCustomFieldsSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldsSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldsSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldsSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldsSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldsSetMessagePayload $data */
                $data = ProductPriceCustomFieldsSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
