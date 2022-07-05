<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductChangeNameAction extends ProductUpdateAction
{
    public const FIELD_NAME = 'name';
    public const FIELD_STAGED = 'staged';

    /**

     * @return null|LocalizedString
     */
    public function getName();

    /**

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
