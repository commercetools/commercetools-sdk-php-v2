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
 * @extends ChangeCollection<SetLineItemDeactivatedAtChange>
 * @method SetLineItemDeactivatedAtChange current()
 * @method SetLineItemDeactivatedAtChange end()
 * @method SetLineItemDeactivatedAtChange at($offset)
 */
class SetLineItemDeactivatedAtChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemDeactivatedAtChange $value
     * @psalm-param SetLineItemDeactivatedAtChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDeactivatedAtChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDeactivatedAtChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDeactivatedAtChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLineItemDeactivatedAtChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemDeactivatedAtChange $data */
                $data = SetLineItemDeactivatedAtChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
