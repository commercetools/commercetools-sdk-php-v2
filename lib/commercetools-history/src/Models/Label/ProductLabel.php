<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface ProductLabel extends Label
{

    public const FIELD_SLUG = 'slug';
    public const FIELD_NAME = 'name';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined identifier used in a deep-link URL for the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
