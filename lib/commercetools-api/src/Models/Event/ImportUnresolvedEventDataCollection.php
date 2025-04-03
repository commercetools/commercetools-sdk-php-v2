<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportUnresolvedEventData>
 * @method ImportUnresolvedEventData current()
 * @method ImportUnresolvedEventData end()
 * @method ImportUnresolvedEventData at($offset)
 */
class ImportUnresolvedEventDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportUnresolvedEventData $value
     * @psalm-param ImportUnresolvedEventData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportUnresolvedEventDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportUnresolvedEventData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportUnresolvedEventData
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportUnresolvedEventData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportUnresolvedEventData $data */
                $data = ImportUnresolvedEventDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
