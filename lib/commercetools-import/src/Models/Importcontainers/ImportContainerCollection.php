<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportContainer>
 * @method ImportContainer current()
 * @method ImportContainer end()
 * @method ImportContainer at($offset)
 */
class ImportContainerCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportContainer $value
     * @psalm-param ImportContainer|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainer
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainer $data */
                $data = ImportContainerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
