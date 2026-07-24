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
 * @extends MessageCollection<ProductTailoringKeySetMessage>
 * @method ProductTailoringKeySetMessage current()
 * @method ProductTailoringKeySetMessage end()
 * @method ProductTailoringKeySetMessage at($offset)
 */
class ProductTailoringKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringKeySetMessage $value
     * @psalm-param ProductTailoringKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringKeySetMessage $data */
                $data = ProductTailoringKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
