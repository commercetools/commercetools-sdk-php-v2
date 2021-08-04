<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveTaxRateChange>
 * @method RemoveTaxRateChange current()
 * @method RemoveTaxRateChange end()
 * @method RemoveTaxRateChange at($offset)
 */
class RemoveTaxRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveTaxRateChange $value
     * @psalm-param RemoveTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveTaxRateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveTaxRateChange $data */
                $data = RemoveTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
