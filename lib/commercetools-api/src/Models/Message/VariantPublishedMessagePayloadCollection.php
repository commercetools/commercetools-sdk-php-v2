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
 * @extends MessagePayloadCollection<VariantPublishedMessagePayload>
 * @method VariantPublishedMessagePayload current()
 * @method VariantPublishedMessagePayload end()
 * @method VariantPublishedMessagePayload at($offset)
 */
class VariantPublishedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantPublishedMessagePayload $value
     * @psalm-param VariantPublishedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantPublishedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantPublishedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantPublishedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantPublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantPublishedMessagePayload $data */
                $data = VariantPublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
