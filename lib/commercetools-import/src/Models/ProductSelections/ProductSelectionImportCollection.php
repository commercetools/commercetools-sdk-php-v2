<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<ProductSelectionImport>
 * @method ProductSelectionImport current()
 * @method ProductSelectionImport end()
 * @method ProductSelectionImport at($offset)
 */
class ProductSelectionImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert ProductSelectionImport $value
     * @psalm-param ProductSelectionImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionImport
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionImport $data */
                $data = ProductSelectionImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
