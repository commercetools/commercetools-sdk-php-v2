<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;

interface Image extends JsonObject
{
    const FIELD_URL = 'url';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_LABEL = 'label';

    /**
     * @return null|string
     */
    public function getUrl();

    /**
     * @return null|AssetDimensions
     */
    public function getDimensions();

    /**
     * @return null|string
     */
    public function getLabel();

    public function setUrl(?string $url): void;

    public function setDimensions(?AssetDimensions $dimensions): void;

    public function setLabel(?string $label): void;
}
