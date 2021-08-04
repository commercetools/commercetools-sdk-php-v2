<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<ProductDraftImport>
 * @method ProductDraftImport current()
 * @method ProductDraftImport end()
 * @method ProductDraftImport at($offset)
 */
class ProductDraftImportCollection extends ImportResourceCollection
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
        return function (?int $index): ?ProductDraftImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDraftImport $data */
                $data = ProductDraftImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
