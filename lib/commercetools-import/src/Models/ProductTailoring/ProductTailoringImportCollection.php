<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductTailoring;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<ProductTailoringImport>
 * @method ProductTailoringImport current()
 * @method ProductTailoringImport end()
 * @method ProductTailoringImport at($offset)
 */
class ProductTailoringImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert ProductTailoringImport $value
     * @psalm-param ProductTailoringImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringImport
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringImport $data */
                $data = ProductTailoringImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
