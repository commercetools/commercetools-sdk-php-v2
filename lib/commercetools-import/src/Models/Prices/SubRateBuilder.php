<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubRate>
 */
final class SubRateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $amount;

    /**
     * @var ?string
     */
    private $name;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withAmount(?int $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): SubRate
    {
        return new SubRateModel(
            $this->amount,
            $this->name
        );
    }

    public static function of(): SubRateBuilder
    {
        return new self();
    }
}
