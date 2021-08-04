<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<ProductTypeImport>
 * @method ProductTypeImport current()
 * @method ProductTypeImport at($offset)
 */
class ProductTypeImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert ProductTypeImport $value
     * @psalm-param ProductTypeImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeImport
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeImport $data */
                $data = ProductTypeImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
