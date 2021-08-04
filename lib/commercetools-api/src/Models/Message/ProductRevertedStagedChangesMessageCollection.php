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
 * @extends MessageCollection<ProductRevertedStagedChangesMessage>
 * @method ProductRevertedStagedChangesMessage current()
 * @method ProductRevertedStagedChangesMessage end()
 * @method ProductRevertedStagedChangesMessage at($offset)
 */
class ProductRevertedStagedChangesMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductRevertedStagedChangesMessage $value
     * @psalm-param ProductRevertedStagedChangesMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRevertedStagedChangesMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertedStagedChangesMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertedStagedChangesMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductRevertedStagedChangesMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRevertedStagedChangesMessage $data */
                $data = ProductRevertedStagedChangesMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
