<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<ProductImport>
 * @method ProductImport current()
 * @method ProductImport end()
 * @method ProductImport at($offset)
 */
class ProductImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert ProductImport $value
     * @psalm-param ProductImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductImport
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductImport $data */
                $data = ProductImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
