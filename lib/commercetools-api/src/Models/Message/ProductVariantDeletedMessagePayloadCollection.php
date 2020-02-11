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
 * @extends MapperSequence<ProductVariantDeletedMessagePayload>
 * @method ProductVariantDeletedMessagePayload current()
 * @method ProductVariantDeletedMessagePayload at($offset)
 */
class ProductVariantDeletedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantDeletedMessagePayload $value
     * @psalm-param ProductVariantDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
