<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface Image extends JsonObject {
    const FIELD_URL = 'url';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_LABEL = 'label';

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return ImageDimensions
     */
    public function getDimensions();

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url);

    /**
     * @param ImageDimensions $dimensions
     * @return $this
     */
    public function setDimensions(ImageDimensions $dimensions);

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel(string $label);

}
