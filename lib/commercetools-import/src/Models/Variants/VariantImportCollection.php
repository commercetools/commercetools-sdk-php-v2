<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Variants;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<VariantImport>
 * @method VariantImport current()
 * @method VariantImport end()
 * @method VariantImport at($offset)
 */
class VariantImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert VariantImport $value
     * @psalm-param VariantImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantImport
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantImport $data */
                $data = VariantImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
