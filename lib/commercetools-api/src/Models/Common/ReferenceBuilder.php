<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<Reference>
 */
final class ReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    public function build(): Reference
    {
        return new ReferenceModel(
            $this->id
        );
    }

    public static function of(): ReferenceBuilder
    {
        return new self();
    }
}
