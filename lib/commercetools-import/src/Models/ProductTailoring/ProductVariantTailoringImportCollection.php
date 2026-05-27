<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductTailoring;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantTailoringImport>
 * @method ProductVariantTailoringImport current()
 * @method ProductVariantTailoringImport end()
 * @method ProductVariantTailoringImport at($offset)
 */
class ProductVariantTailoringImportCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantTailoringImport $value
     * @psalm-param ProductVariantTailoringImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoringImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoringImport
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoringImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoringImport $data */
                $data = ProductVariantTailoringImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
