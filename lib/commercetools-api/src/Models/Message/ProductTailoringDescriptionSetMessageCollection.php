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
 * @extends MessageCollection<ProductTailoringDescriptionSetMessage>
 * @method ProductTailoringDescriptionSetMessage current()
 * @method ProductTailoringDescriptionSetMessage end()
 * @method ProductTailoringDescriptionSetMessage at($offset)
 */
class ProductTailoringDescriptionSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringDescriptionSetMessage $value
     * @psalm-param ProductTailoringDescriptionSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringDescriptionSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringDescriptionSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringDescriptionSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringDescriptionSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringDescriptionSetMessage $data */
                $data = ProductTailoringDescriptionSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
