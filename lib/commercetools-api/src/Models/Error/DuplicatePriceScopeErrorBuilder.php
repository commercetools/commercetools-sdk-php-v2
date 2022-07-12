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

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**

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
