<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productdrafts;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDraftImport>
 * @method ProductDraftImport current()
 * @method ProductDraftImport at($offset)
 */
class ProductDraftImportCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDraftImport $value
     * @psalm-param ProductDraftImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDraftImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDraftImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDraftImport
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDraftImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDraftImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
