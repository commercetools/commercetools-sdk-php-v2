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
 * @extends MessageCollection<ProductSelectionDeletedMessage>
 * @method ProductSelectionDeletedMessage current()
 * @method ProductSelectionDeletedMessage end()
 * @method ProductSelectionDeletedMessage at($offset)
 */
class ProductSelectionDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSelectionDeletedMessage $value
     * @psalm-param ProductSelectionDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionDeletedMessage $data */
                $data = ProductSelectionDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
