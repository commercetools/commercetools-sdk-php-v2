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
 * @extends MessageCollection<VariantSkuSetMessage>
 * @method VariantSkuSetMessage current()
 * @method VariantSkuSetMessage end()
 * @method VariantSkuSetMessage at($offset)
 */
class VariantSkuSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantSkuSetMessage $value
     * @psalm-param VariantSkuSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSkuSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSkuSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSkuSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSkuSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSkuSetMessage $data */
                $data = VariantSkuSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
