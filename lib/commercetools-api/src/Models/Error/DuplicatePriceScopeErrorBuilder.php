<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DuplicatePriceScopeError>
 */
final class DuplicatePriceScopeErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?PriceCollection
     */
    private $conflictingPrices;

    /**
     * <p><code>&quot;Duplicate price scope: $priceScope. The combination of currency, country, customerGroup and channel must be unique for each price of a product variant.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Conflicting Embedded Prices.</p>
     *

     * @return null|PriceCollection
     */
    public function getConflictingPrices()
    {
        return $this->conflictingPrices;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?PriceCollection $conflictingPrices
     * @return $this
     */
    public function withConflictingPrices(?PriceCollection $conflictingPrices)
    {
        $this->conflictingPrices = $conflictingPrices;

        return $this;
    }


    public function build(): DuplicatePriceScopeError
    {
        return new DuplicatePriceScopeErrorModel(
            $this->message,
            $this->conflictingPrices
        );
    }

    public static function of(): DuplicatePriceScopeErrorBuilder
    {
        return new self();
    }
}
