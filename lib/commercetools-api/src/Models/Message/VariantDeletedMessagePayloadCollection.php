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
 * @extends MessagePayloadCollection<VariantDeletedMessagePayload>
 * @method VariantDeletedMessagePayload current()
 * @method VariantDeletedMessagePayload end()
 * @method VariantDeletedMessagePayload at($offset)
 */
class VariantDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantDeletedMessagePayload $value
     * @psalm-param VariantDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantDeletedMessagePayload $data */
                $data = VariantDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
