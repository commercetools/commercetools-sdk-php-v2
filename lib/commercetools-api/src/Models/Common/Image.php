<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Image extends JsonObject
{
    public const FIELD_URL = 'url';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_LABEL = 'label';

    /**
     * <p>URL of the image in its original size that must be unique within a single <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getUrl();

    /**
     * <p>Dimensions of the original image.</p>
     *

     * @return null|ImageDimensions
     */
    public function getDimensions();

    /**
     * <p>Custom label for the image.</p>
     *

     * @return null|string
     */
    public function getLabel();

    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void;

    /**
     * @param ?ImageDimensions $dimensions
     */
    public function setDimensions(?ImageDimensions $dimensions): void;

    /**
     * @param ?string $label
     */
    public function setLabel(?string $label): void;
}
