<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ReviewLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_TITLE = 'title';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined unique identifier of the Review.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Title of the Review.</p>
     *

     * @return null|string
     */
    public function getTitle();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void;
}
