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
 * @extends ChangeCollection<SetProductAttributeChange>
 * @method SetProductAttributeChange current()
 * @method SetProductAttributeChange end()
 * @method SetProductAttributeChange at($offset)
 */
class SetProductAttributeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetProductAttributeChange $value
     * @psalm-param SetProductAttributeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductAttributeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductAttributeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductAttributeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetProductAttributeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetProductAttributeChange $data */
                $data = SetProductAttributeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
