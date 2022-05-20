<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssetSource extends JsonObject
{
    public const FIELD_URI = 'uri';
    public const FIELD_KEY = 'key';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * <p>URI of the AssetSource.</p>
     *
     * @return null|string
     */
    public function getUri();

    /**
     * <p>User-defined unique identifier of the AssetSource.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Width and height of the AssetSource.</p>
     *
     * @return null|AssetDimensions
     */
    public function getDimensions();

    /**
     * <p>Indicates the type of content, for example <code>application/pdf</code>.</p>
     *
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
