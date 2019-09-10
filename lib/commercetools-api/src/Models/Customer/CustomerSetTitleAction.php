<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetTitleAction extends CustomerUpdateAction
{
    const FIELD_TITLE = 'title';

    /**
     * @return null|string
     */
    public function getTitle();

    public function setTitle(?string $title): void;
}
