<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Base\JsonObject;

interface CustomObject extends BaseResource
{
    const FIELD_CONTAINER = 'container';
    const FIELD_KEY = 'key';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getContainer();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setContainer(?string $container): void;

    public function setKey(?string $key): void;

    public function setValue(?JsonObject $value): void;
}
