<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerFirstNameSetMessagePayload extends MessagePayload
{
    public const FIELD_FIRST_NAME = 'firstName';

    /**
     * <p>The <code>firstName</code> that was set during the <a href="ctp:api:type:CustomerSetFirstNameAction">Set First Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getFirstName();

    /**
     * @param ?string $firstName
     */
    public function setFirstName(?string $firstName): void;
}
