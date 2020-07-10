<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsummaries;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportSummary>
 * @method ImportSummary current()
 * @method ImportSummary at($offset)
 */
class ImportSummaryCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportSummary $value
     * @psalm-param ImportSummary|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportSummaryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportSummary) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportSummary
     */
    protected function mapper()
    {
        return function (int $index): ?ImportSummary {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportSummaryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
