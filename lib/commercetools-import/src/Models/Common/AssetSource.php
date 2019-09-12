<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;

interface AssetSource extends JsonObject
{
    const FIELD_URI = 'uri';
    const FIELD_KEY = 'key';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * @return null|string
     */
    public function getUri();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|AssetDimensions
     */
    public function getDimensions();

    /**
     * @return null|string
     */
    public function getContentType();

    public function setUri(?string $uri): void;

    public function setKey(?string $key): void;

    public function setDimensions(?AssetDimensions $dimensions): void;

    public function setContentType(?string $contentType): void;
}
