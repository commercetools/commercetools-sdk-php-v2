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
 * @extends MapperSequence<ImportContainerDraft>
 * @method ImportContainerDraft current()
 * @method ImportContainerDraft end()
 * @method ImportContainerDraft at($offset)
 */
class ImportContainerDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportContainerDraft $value
     * @psalm-param ImportContainerDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerDraft $data */
                $data = ImportContainerDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
