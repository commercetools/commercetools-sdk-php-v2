<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingInfoImportDraft>
 * @method ShippingInfoImportDraft current()
 * @method ShippingInfoImportDraft at($offset)
 */
class ShippingInfoImportDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingInfoImportDraft $value
     * @psalm-param ShippingInfoImportDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingInfoImportDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingInfoImportDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingInfoImportDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingInfoImportDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingInfoImportDraft $data */
                $data = ShippingInfoImportDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
