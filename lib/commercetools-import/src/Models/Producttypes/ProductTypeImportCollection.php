<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeImport>
 * @method ProductTypeImport current()
 * @method ProductTypeImport at($offset)
 */
class ProductTypeImportCollection extends MapperSequence
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
        return function (int $index): ?ProductTypeImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
