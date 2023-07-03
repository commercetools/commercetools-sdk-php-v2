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
 * @extends ChangeCollection<RequestQuoteRenegotiationChange>
 * @method RequestQuoteRenegotiationChange current()
 * @method RequestQuoteRenegotiationChange end()
 * @method RequestQuoteRenegotiationChange at($offset)
 */
class RequestQuoteRenegotiationChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RequestQuoteRenegotiationChange $value
     * @psalm-param RequestQuoteRenegotiationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RequestQuoteRenegotiationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RequestQuoteRenegotiationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RequestQuoteRenegotiationChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RequestQuoteRenegotiationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RequestQuoteRenegotiationChange $data */
                $data = RequestQuoteRenegotiationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
