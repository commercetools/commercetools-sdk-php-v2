<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<QuoteResourceIdentifier>
 * @method QuoteResourceIdentifier current()
 * @method QuoteResourceIdentifier end()
 * @method QuoteResourceIdentifier at($offset)
 */
class QuoteResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert QuoteResourceIdentifier $value
     * @psalm-param QuoteResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteResourceIdentifier $data */
                $data = QuoteResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
