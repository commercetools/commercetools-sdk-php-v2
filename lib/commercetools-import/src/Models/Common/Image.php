<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Image extends JsonObject
{
    public const FIELD_URL = 'url';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_LABEL = 'label';

    /**
     * <p>URL of the image in its original size. The URL must be unique within a single variant. It can be used to obtain the image in different sizes.</p>
     *
     * @return null|string
     */
    public function getUrl();

    /**
     * <p>Dimensions of the original image. This can be used by your application, for example, to determine whether the image is large enough to display a zoom view.</p>
     *
     * @return null|AssetDimensions
     */
    public function getDimensions();

    /**
     * <p>Custom label that can be used, for example, as an image description.</p>
     *
     * @return null|string
     */
    public function getLabel();

    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void;

    /**
     * @param ?AssetDimensions $dimensions
     */
    public function setDimensions(?AssetDimensions $dimensions): void;

    /**
     * @param ?string $label
     */
    public function setLabel(?string $label): void;
}
