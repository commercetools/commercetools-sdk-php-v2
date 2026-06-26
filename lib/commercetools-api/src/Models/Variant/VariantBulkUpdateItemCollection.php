<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantBulkUpdateItem>
 * @method VariantBulkUpdateItem current()
 * @method VariantBulkUpdateItem end()
 * @method VariantBulkUpdateItem at($offset)
 */
class VariantBulkUpdateItemCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantBulkUpdateItem $value
     * @psalm-param VariantBulkUpdateItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantBulkUpdateItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantBulkUpdateItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantBulkUpdateItem
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantBulkUpdateItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantBulkUpdateItem $data */
                $data = VariantBulkUpdateItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
