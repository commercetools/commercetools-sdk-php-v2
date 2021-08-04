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
 * @extends ChangeCollection<SetLineItemDistributionChannelChange>
 * @method SetLineItemDistributionChannelChange current()
 * @method SetLineItemDistributionChannelChange end()
 * @method SetLineItemDistributionChannelChange at($offset)
 */
class SetLineItemDistributionChannelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemDistributionChannelChange $value
     * @psalm-param SetLineItemDistributionChannelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDistributionChannelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDistributionChannelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDistributionChannelChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLineItemDistributionChannelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemDistributionChannelChange $data */
                $data = SetLineItemDistributionChannelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
