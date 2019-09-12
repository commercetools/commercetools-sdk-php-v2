<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportItem>
 *
 * @method ImportItem current()
 * @method ImportItem at($offset)
 */
class ImportItemCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportItem $value
     * @psalm-param ImportItem|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ImportItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportItem
     */
    protected function mapper()
    {
        return function (int $index): ?ImportItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
