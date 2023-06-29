<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantSelection>
 * @method ProductVariantSelection current()
 * @method ProductVariantSelection end()
 * @method ProductVariantSelection at($offset)
 */
class ProductVariantSelectionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantSelection $value
     * @psalm-param ProductVariantSelection|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantSelectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantSelection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantSelection
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantSelection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantSelection $data */
                $data = ProductVariantSelectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
