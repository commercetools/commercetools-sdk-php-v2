<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface AssetSource extends JsonObject {
    const FIELD_URI = 'uri';
    const FIELD_KEY = 'key';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * @return string
     */
    public function getUri();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return AssetDimensions
     */
    public function getDimensions();

    /**
     * @return string
     */
    public function getContentType();

    /**
     * @param string $uri
     * @return $this
     */
    public function setUri(string $uri);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param AssetDimensions $dimensions
     * @return $this
     */
    public function setDimensions(AssetDimensions $dimensions);

    /**
     * @param string $contentType
     * @return $this
     */
    public function setContentType(string $contentType);

}
