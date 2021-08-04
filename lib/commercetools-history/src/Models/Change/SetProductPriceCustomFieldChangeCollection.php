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
 * @extends ChangeCollection<SetProductPriceCustomFieldChange>
 * @method SetProductPriceCustomFieldChange current()
 * @method SetProductPriceCustomFieldChange end()
 * @method SetProductPriceCustomFieldChange at($offset)
 */
class SetProductPriceCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetProductPriceCustomFieldChange $value
     * @psalm-param SetProductPriceCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductPriceCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductPriceCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductPriceCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetProductPriceCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetProductPriceCustomFieldChange $data */
                $data = SetProductPriceCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
