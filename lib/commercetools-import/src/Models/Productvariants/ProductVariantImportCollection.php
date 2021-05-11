<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<ProductVariantImport>
 * @method ProductVariantImport current()
 * @method ProductVariantImport at($offset)
 */
class ProductVariantImportCollection extends ImportResourceCollection
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
                /** @var ProductVariantImport $data */
                $data = ProductVariantImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
