<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SubRate extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';

    /**

     * @return null|string
     */
    public function getName();

    /**

     * @return null|int
     */
    public function getAmount();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?int $amount
     */
    public function setAmount(?int $amount): void;
}
