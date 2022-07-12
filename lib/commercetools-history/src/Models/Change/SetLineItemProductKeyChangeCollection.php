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
 * @extends ChangeCollection<SetLineItemProductKeyChange>
 * @method SetLineItemProductKeyChange current()
 * @method SetLineItemProductKeyChange end()
 * @method SetLineItemProductKeyChange at($offset)
 */
class SetLineItemProductKeyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemProductKeyChange $value
     * @psalm-param SetLineItemProductKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemProductKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemProductKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemProductKeyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLineItemProductKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemProductKeyChange $data */
                $data = SetLineItemProductKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
