<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Categories;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryImport>
 * @method CategoryImport current()
 * @method CategoryImport at($offset)
 */
class CategoryImportCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryImport $value
     * @psalm-param CategoryImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryImport
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
