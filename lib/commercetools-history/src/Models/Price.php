<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Price extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|Money
     */
    public function getValue();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;
}
