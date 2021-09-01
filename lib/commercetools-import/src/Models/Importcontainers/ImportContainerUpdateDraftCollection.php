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
 * @extends MapperSequence<ImportContainerUpdateDraft>
 * @method ImportContainerUpdateDraft current()
 * @method ImportContainerUpdateDraft end()
 * @method ImportContainerUpdateDraft at($offset)
 */
class ImportContainerUpdateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportContainerUpdateDraft $value
     * @psalm-param ImportContainerUpdateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerUpdateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerUpdateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerUpdateDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerUpdateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerUpdateDraft $data */
                $data = ImportContainerUpdateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
