<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\DiscountCodes;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<DiscountCodeImport>
 * @method DiscountCodeImport current()
 * @method DiscountCodeImport end()
 * @method DiscountCodeImport at($offset)
 */
class DiscountCodeImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert DiscountCodeImport $value
     * @psalm-param DiscountCodeImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeImport
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeImport $data */
                $data = DiscountCodeImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
