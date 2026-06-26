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
 * @extends MessagePayloadCollection<VariantSkuSetMessagePayload>
 * @method VariantSkuSetMessagePayload current()
 * @method VariantSkuSetMessagePayload end()
 * @method VariantSkuSetMessagePayload at($offset)
 */
class VariantSkuSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantSkuSetMessagePayload $value
     * @psalm-param VariantSkuSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSkuSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSkuSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSkuSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSkuSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSkuSetMessagePayload $data */
                $data = VariantSkuSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
