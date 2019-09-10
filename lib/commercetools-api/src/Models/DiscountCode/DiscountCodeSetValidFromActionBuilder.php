<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<DiscountCodeSetValidFromAction>
 */
final class DiscountCodeSetValidFromActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function build(): DiscountCodeSetValidFromAction
    {
        return new DiscountCodeSetValidFromActionModel(
            $this->action,
            $this->validFrom
        );
    }

    public static function of(): DiscountCodeSetValidFromActionBuilder
    {
        return new self();
    }
}
