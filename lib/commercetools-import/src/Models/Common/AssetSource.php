<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssetSource extends JsonObject
{
    public const FIELD_URI = 'uri';
    public const FIELD_KEY = 'key';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_CONTENT_TYPE = 'contentType';

    /**

     * @return null|string
     */
    public function getUri();

    /**

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The width and height of the Asset Source.</p>
     *

     * @return null|AssetDimensions
     */
    public function getDimensions();

    /**

     * @return null|string
     */
    public function getContentType();

    /**
     * @param ?string $uri
     */
    public function setUri(?string $uri): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?AssetDimensions $dimensions
     */
    public function setDimensions(?AssetDimensions $dimensions): void;

    /**
     * @param ?string $contentType
     */
    public function setContentType(?string $contentType): void;
}
