<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ReviewSetCustomFieldAction extends ReviewUpdateAction
{

    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}
