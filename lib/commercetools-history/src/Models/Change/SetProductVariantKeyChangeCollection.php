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
 * @extends ChangeCollection<SetProductVariantKeyChange>
 * @method SetProductVariantKeyChange current()
 * @method SetProductVariantKeyChange at($offset)
 */
class SetProductVariantKeyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetProductVariantKeyChange $value
     * @psalm-param SetProductVariantKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductVariantKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductVariantKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductVariantKeyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetProductVariantKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetProductVariantKeyChange $data */
                $data = SetProductVariantKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
