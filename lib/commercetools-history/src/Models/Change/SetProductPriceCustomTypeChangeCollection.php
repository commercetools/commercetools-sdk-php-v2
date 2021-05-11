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
 * @extends ChangeCollection<SetProductPriceCustomTypeChange>
 * @method SetProductPriceCustomTypeChange current()
 * @method SetProductPriceCustomTypeChange at($offset)
 */
class SetProductPriceCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetProductPriceCustomTypeChange $value
     * @psalm-param SetProductPriceCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductPriceCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductPriceCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductPriceCustomTypeChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetProductPriceCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetProductPriceCustomTypeChange $data */
                $data = SetProductPriceCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
