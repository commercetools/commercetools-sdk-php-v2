<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StagedQuoteSetValidToAction extends StagedQuoteUpdateAction
{
    public const FIELD_VALID_TO = 'validTo';

    /**
     * <p>If <code>validTo</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidTo();

    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void;
}
