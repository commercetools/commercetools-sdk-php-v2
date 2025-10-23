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
 * @extends ChangeCollection<ReplaceTaxRateChange>
 * @method ReplaceTaxRateChange current()
 * @method ReplaceTaxRateChange end()
 * @method ReplaceTaxRateChange at($offset)
 */
class ReplaceTaxRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ReplaceTaxRateChange $value
     * @psalm-param ReplaceTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReplaceTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReplaceTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReplaceTaxRateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ReplaceTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReplaceTaxRateChange $data */
                $data = ReplaceTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
