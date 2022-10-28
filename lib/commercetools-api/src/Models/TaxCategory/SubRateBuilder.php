<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubRate>
 */
final class SubRateBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?float
     */
    private $amount;

    /**
     * <p>Name of the SubRate.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**

     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?float $amount
     * @return $this
     */
    public function withAmount(?float $amount)
    {
        $this->amount = $amount;

        return $this;
    }


    public function build(): SubRate
    {
        return new SubRateModel(
            $this->name,
            $this->amount
        );
    }

    public static function of(): SubRateBuilder
    {
        return new self();
    }
}
