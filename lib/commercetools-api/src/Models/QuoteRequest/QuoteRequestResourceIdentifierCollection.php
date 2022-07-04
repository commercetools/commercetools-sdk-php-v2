<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<QuoteRequestResourceIdentifier>
 * @method QuoteRequestResourceIdentifier current()
 * @method QuoteRequestResourceIdentifier end()
 * @method QuoteRequestResourceIdentifier at($offset)
 */
class QuoteRequestResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert QuoteRequestResourceIdentifier $value
     * @psalm-param QuoteRequestResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestResourceIdentifier $data */
                $data = QuoteRequestResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
