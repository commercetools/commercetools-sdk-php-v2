<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantImport>
 * @method ProductVariantImport current()
 * @method ProductVariantImport at($offset)
 */
class ProductVariantImportCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantImport $value
     * @psalm-param ProductVariantImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantImport
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
