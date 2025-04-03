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
 * @extends MapperSequence<ImportWaitForMasterVariantEventData>
 * @method ImportWaitForMasterVariantEventData current()
 * @method ImportWaitForMasterVariantEventData end()
 * @method ImportWaitForMasterVariantEventData at($offset)
 */
class ImportWaitForMasterVariantEventDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportWaitForMasterVariantEventData $value
     * @psalm-param ImportWaitForMasterVariantEventData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportWaitForMasterVariantEventDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportWaitForMasterVariantEventData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportWaitForMasterVariantEventData
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportWaitForMasterVariantEventData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportWaitForMasterVariantEventData $data */
                $data = ImportWaitForMasterVariantEventDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
